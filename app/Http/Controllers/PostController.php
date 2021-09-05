<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()->filter(request(['search']))->get();
        
        return view('posts', [
            'posts' => $posts,
            'categories' => Category::all(),
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            'post' => $post
        ]);
    }

    public function storeComment(Request $request)
    {
        
        request()->validate([
            'body' => 'required|min:3|max:255',
        ]);
        
        // dd(request()->all());

        Comment::create([
        // 'user_id' => auth()->id(),
        'user_id' => 21,
        'post_id' => request()->input('post_id'),
        'body' => request()->input('body'),
        ]);

        return redirect()->back();
    }

}
