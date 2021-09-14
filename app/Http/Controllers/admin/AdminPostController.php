<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    public function index(Post $post) {
      return view('admin.post.index', [
        'posts' => $post
          // ->with('category')
          ->latest()
          ->paginate(10)
      ]);
    }

    public function show(Post $post) {
      return view('admin.post.show', [
        'post' => $post,
        'categories' => Category::all(),
      ]);
    }

    public function store(Post $post) {
      // dd(request()->all());

      request()->validate([
        "title" =>"required",
        "slug" =>"required",
        "excerpt" =>"required",
        "body" =>"required",
        "category" =>"required",
      ]);

       $post->update([
        // 'user_id' => 1,
        'user_id' => auth()->id(),
        'category_id' => request()->input('category'),
        'title' => request()->input('title'),
        'slug' => request()->input('slug'),
        'excerpt' => request()->input('excerpt'),
        'body' => request()->input('body'),
      ]);

      // $post->title = 'Paris to London';
      // $post->save();

      return redirect(route('admin.posts'))
        ->with('success','Post submitted successfully to Database!');
    }
}
