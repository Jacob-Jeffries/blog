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
    // $sorted = Post::sort($posts);
    // dd($sorted);
    // $sorted = $posts->sortBy('date');

    // $test = date_parse_from_format("Y-m-d", "2023-08-21");
    // $currentDate = date("Y-m-d");
    // dd($test);
    // dd($currentDate);

    return view('posts', [
        'posts' => Post::all()->sortBy('date'),
    ]);
});

Route::get('post/{post}', function ($slug) {
    // $post = Post::find($slug);
    // dd($post);

    return view('post', [
    'post' => Post::find($slug),
    ]);
})->where('post', '[A-z_\-]+');
