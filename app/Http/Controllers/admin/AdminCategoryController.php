<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Validation\Rule;

class AdminCategoryController extends Controller
{
    public function index() {
      return view('admin.category.index', [
        'categories' => Category::latest()->paginate(10)
      ]);
    }
    
    public function edit(Category $category) {
      return view('admin.category.edit', [
        'category' => $category,
      ]);
    }
    
    public function update(Category $category) {
      // dd(request()->all());
      request()->validate([
        "name" => ['required', Rule::unique('categories', 'name')->ignore($category)],
        "slug" => ['required', Rule::unique('categories', 'slug')->ignore($category)],
        "description" => "required",
      ]);

      $category->update([
        'name' => request()->input('name'),
        'slug' => request()->input('slug'),
        'description' => request()->input('description'),
      ]);
      
      return 
        redirect(route('admin.category.index'))
        ->with("success", "Category successfully updated ✅");
    }
    
    public function destroy(Category $category) {
      // $category->posts()->delete();
      $category->delete();
      return 
        redirect(route('admin.category.index'))
        ->with("success", "Category successfully deleted ❌");
    }
    
    public function create() {
      // return ('Create new Category  => ');
      return view('admin.category.create');
    }
    
    public function store() {
      // dd(request()->all());
      request()->validate([
        "name" => "required|unique:categories",
        "slug" => "required|unique:categories",
        "description" => "required",
      ]);

      Category::create([
        'name' => request()->input('name'),
        'slug' => request()->input('slug'),
        'description' => request()->input('description'),
      ]);
      
      return 
        redirect(route('admin.category.index'))
        ->with("success", "Category successfully updated ✅");
    }
}
