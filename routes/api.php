<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppPostController;
use App\Http\Resources\PostCollection;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::post('/post', [AppPostController::class, 'create']);
Route::post('/post/{id}', [AppPostController::class, 'create'])->where('id', '[0-9]+');

// Route::get('/post', [AppPostController::class, 'getPost']);

// Route::get('/post', function (Request $request) {
//     return new  PostCollection(Post::all());
// });

Route::get('/post/{id?}', function (Request $request, $id = null) {
    if ($id) {
        return new PostCollection([Post::where('id', $id)->first()]);
    }
    return new  PostCollection(Post::all());
});
