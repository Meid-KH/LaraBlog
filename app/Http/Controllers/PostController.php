<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::latest()
                ->filter(request(['search']))
                ->paginate(15);
                // ->get();
        
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

    public function storeComment(Post $post)
    {
        
        request()->validate([
            'body' => 'required|min:3|max:255',
        ]);
        
        // dd(request()->all());

        $post->comments()->create([
        // 'user_id' => 1,
        'user_id' => auth()->id(),
        'body' => request()->input('body'),
        ]);

        return redirect()
            ->back()
            ->with('success','Your comment added successfully!');
    }

}
