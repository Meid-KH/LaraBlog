<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view('categories', [
            'categories' => Category::latest()->get(),
        ]);
    }

    public function show(Category $category) {
        return view('category', [
            'category' => $category,
            // 'posts' => $category->posts()->paginate(9),
            'currentCategory' => $category,
            'categories' => Category::all(),
        ]);
    }

}
