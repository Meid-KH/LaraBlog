<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Services\NewsLetter;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function __invoke(NewsLetter $newsletterList) {
      $subscribersList = $newsletterList->getList(null);

      return view('admin.dashboard', [
        'posts' => Post::all(),
        'categories' => Category::all(),
        'comments' => Comment::all(),
        'authors' => User::all(),
        'subscribers' => $subscribersList,
      ]);
    }
}
