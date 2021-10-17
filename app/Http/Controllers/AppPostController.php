<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateApiPostRequest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AppPostController extends Controller
{
    public function create(CreateApiPostRequest $request)
    {
        $user = User::where('id', $request->get('user_id'))->first();

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message_error' => 'Invalid user_id',
            ]);
        }

        $post = Post::create([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'user_id' => $request->get('user_id'),
            'date' => date('d.m.y'),
        ]);

        return response()->json($post);
    }

    public function getPost(Request $request)
    {
        if ($request->id) {
            // $post = Post::where('id', $request->id)->first();
            $post = Post::where('id', $request->id)
                ->get()
                ->toArray();
        } else {
            $post = Post::all()->toArray();
        }

        return response()->json($post);
    }
}
