<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// POST
Route::get('/posts', function () {
    $posts = Post::latest()->get();
    return view('posts', [
        'posts' => $posts
    ]);
});
Route::get('/post/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

// Category
Route::get('/categories', function () {
    return view('categories', [
        'categories' => Category::latest()->get()
    ]);
});
Route::get('/category/{category:slug}', function (Category $category) {
    return view('category', [
        'category' => $category
    ]);
});

// Author
Route::get('/authors', function () {
    return view('authors', [
        'authors' => User::latest()->get()
    ]);
});
Route::get('/author/{author}', function (User $author) {
    return view('author', [
        'author' => $author
    ]);
});