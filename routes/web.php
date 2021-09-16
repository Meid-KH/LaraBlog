<?php

use App\Http\Controllers\admin\AdminCategoryController;
use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminPostController;
use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\admin\AdminUserController;
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
// Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/category/{category:slug}', [CategoryController::class, 'show'])->name('category');


// Author
Route::get('/authors', [AuthorController::class, 'index'])->name('authors');
Route::get('/author/{author}', [AuthorController::class, 'show'])->name('author');

// Newsletter
Route::post('/newsletter', NewsletterController::class)->name('newsletter');

// Breeze
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Admin
Route::middleware('can:admin')->name("admin.")->prefix('admin')->group(function () {

  // Home / Overview
  Route::get('/', AdminDashboardController::class)
  ->name('dashboard');
  
  // Posts
    Route::get('/posts', [AdminPostController::class, 'index'])
      ->name('posts');

    Route::get('/post/{post:slug}', [AdminPostController::class, 'edit'])
      ->name('post');

    Route::patch('/post/{post}', [AdminPostController::class, 'update'])
      ->name('post.update');

    Route::get('/new-post', [AdminPostController::class, 'create'])
      ->name('post.create');

    Route::post('/new-post', [AdminPostController::class, 'store'])
      ->name('post.store');

    Route::delete('post/{post}/delete', [AdminPostController::class, 'destroy'])
      ->name('post.delete');
    
  // Categories
    Route::get('/categories', [AdminCategoryController::class, 'index'])
      ->name('category.index');

    Route::get('/categories/{category:slug}', [AdminCategoryController::class, 'edit'])
      ->name('category.edit');

    Route::patch('/categories/{category}/update', [AdminCategoryController::class, 'update'])
      ->name('category.update');

    Route::delete('/categories/{category}/delete', [AdminCategoryController::class, 'destroy'])
      ->name('category.delete');

    Route::get('/new-category', [AdminCategoryController::class, 'create'])
      ->name('category.create');

    Route::post('/new-category', [AdminCategoryController::class, 'store'])
      ->name('category.store');
      
  // Newsletter
      Route::get('/subscriptions', function() {
        return ("Subscription go here !");
      })
      ->name('subscriptions');
      
  // Users
    Route::get('/users', [AdminUserController::class, 'index'])
      ->name('user.index');

    Route::get('/users/{user:id}', [AdminUserController::class, 'show'])
      ->name('user.show');

    Route::delete('/users/{user:id}/delete', [AdminUserController::class, 'destroy'])
      ->name('user.delete');

    // current admin
    Route::get('/profile', [AdminProfileController::class, 'show'])
      ->name('profile');
});
