<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Resources\PostCollection;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AppPostController extends Controller
{
    public function create(PostRequest $request, $id)
    {
        // return $id;

        // $user = User::where('id', $request->get('user_id'))->first();
        $user = User::where('id', $id)->first();

        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message_error' => 'Invalid user_id',
            ]);
        }

        $post = Post::create([
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'user_id' => $id,
            'date' => date('Y-m-d H:i:s', time()),
        ]);

        // return response()->json($post);
        return new PostCollection([$post]);
    }

    // public function getPost(Request $request)
    // {
    //     if ($request->id) {
    //         // $post = Post::where('id', $request->id)->first();
    //         $post = Post::where('id', $request->id)
    //             ->get()
    //             ->toArray();
    //     } else {
    //         $post = Post::all()->toArray();
    //     } 
    //     return response()->json($post);
    // }
}
