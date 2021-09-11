<?php

use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminPostController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// POST
Route::get('/', [PostController::class, 'index'])->name('posts');
Route::get('/post/{post:slug}', [PostController::class, 'show'])->name('post');
Route::post('/post/{post:slug}/comment', [PostController::class, 'storeComment'])->name('store_comment');


// Category
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('category');


// Author
Route::get('/authors', [AuthorController::class, 'index'])->name('authors');
Route::get('/author/{author}', [AuthorController::class, 'show'])->name('author');

// Newsletter
Route::post('/newsletter', NewsletterController::class)->name('newsletter');

// Breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Admin
Route::name("admin.")->prefix('admin')->group(function () {
    Route::get('/', AdminDashboardController::class)
      ->name('dashboard');

    Route::get('/posts', [AdminPostController::class, 'index'])
    ->name('posts');
    
    Route::get('/categories', [AdminCategoryController::class, 'index'])
      ->name('categories');

    Route::get('/users', function() {
      return ("Users");
    })
      ->name('users');
});
