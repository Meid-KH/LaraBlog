<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function edit(Post $post) {
      return view('admin.post.edit', [
        'post' => $post,
        'categories' => Category::all(),
      ]);
    }

    public function update(Post $post) {

      request()->validate([
        "title" => ['required', Rule::unique('posts', 'title')->ignore($post)],
        "slug" => ['required', Rule::unique('posts', 'slug')->ignore($post)],
        "excerpt" => "required",
        "body" => "required",
        "category" => ['required', Rule::exists('categories', 'id')],
        'thumbnail' => $post->exists ? ['image'] : ['required', 'image'],
      ]);

       $post->update([
        'category_id' => request()->input('category'),
        'title' => request()->input('title'),
        'slug' => request()->input('slug'),
        'excerpt' => request()->input('excerpt'),
        'body' => request()->input('body'),
        'thumbnail' => request()->file('thumbnail')->store('thumbnails'),
      ]);

      return redirect(route('admin.posts'))
        ->with('success','Cheers! Post successfully updated!');
    }

    public function create() {
      return view('admin.post.create',[
        'categories' => Category::all(),
      ]);
    }

    public function store(Post $post) {
      // dd(request()->all());

      request()->validate([
        "title" => "required|unique:posts",
        "slug" => ['required', Rule::unique('posts', 'slug')->ignore($post)],
        "excerpt" => "required",
        "body" => "required",
        "category" => ['required', Rule::exists('categories', 'id')],
        'thumbnail' => ['required', 'image'],
      ]);

      $post->create([
        'user_id' => auth()->id(),
        'category_id' => request()->input('category'),
        'title' => request()->input('title'),
        'slug' => request()->input('slug'),
        'excerpt' => request()->input('excerpt'),
        'body' => request()->input('body'),
        'thumbnail' => request()->file('thumbnail')->store('thumbnails'),
      ]);

      return redirect(route('admin.posts'))
        ->with('success','Cheers! Post successfully stored to the databases!');
    }
}
