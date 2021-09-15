<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function index() {
      return view('admin.categories');
    }
    
    public function show(Category $category) {
      return ('Single Category => '. $category->name);
    }
}
