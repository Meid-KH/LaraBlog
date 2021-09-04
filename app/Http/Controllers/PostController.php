<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

}
