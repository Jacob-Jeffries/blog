<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post_FS;
use App\Models\Post;
use App\Models\Category;

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

// Route::get('/', function () {
//     // $posts = Post::all();
//     // $sorted = Post::sort($posts);
//     // dd($sorted);
//     // $sorted = $posts->sortBy('date');

//     // $test = date_parse_from_format("Y-m-d", "2023-08-21");
//     // $currentDate = date("Y-m-d");
//     // dd($test);
//     // dd($currentDate);

//     return view('posts_fs', [
//         'posts' => Post_FS::all()->sortByDesc('date'),
//     ]);
// });

// Route::get('post/{post}', function ($post) {
//     // Using the Route Model Binding method, the "slug" defaults to the id
//     // To Change the search option {post:slug}
//     // You can change the default key in the Model file:
//     // getRouteKeyName(){return 'slug';} -- This is the old fashioned way.
//     // dd(Post_FS::find($post));
//     return view('post_fs', [
//         'post' => Post_FS::find($post),
//     ]);
// });

Route::get('/', function () {
    // \Illuminate\Support\Facades\DB::listen(function ($query){
    //     logger($query->sql, $query->bindings);
    // });

    return view('posts_fs', [
        'posts' => Post::with('category')->get(),
    ]);
});

Route::get('/post/{post}', function ($id) {
    return view('post_fs', [
        'post' => Post::findOrFail($id),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts_fs', [
        'posts' => $category->posts,
    ]);
});
