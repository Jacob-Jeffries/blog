<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $posts = Post::all();
    // dd($posts[0]['filename']);

    return view('posts', [
        'posts' => Post::all(),
    ]);
});

Route::get('post/{post}', function ($slug) {
    $post = Post::find($slug);
    dd($post);

    return view('post', [
    'post' => $post = Post::find($slug),
    ]);
})->where('post', '[A-z_\-]+');
