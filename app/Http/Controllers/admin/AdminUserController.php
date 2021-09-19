<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
  public function index() {
    return view('admin.user.index', [
      'users' => User::latest()->paginate(10)
    ]);
  }
  
  public function show(User $user) {
    return view('admin.user.show', [
      'user' => $user,
    ]);
  }

  public function destroy(User $user) {
    $user->posts()->delete();
    $user->delete();
    return 
      redirect(route('admin.user.index'))
      ->with("success", "User successfully deleted ❌");
  }

  public function makeAdmin(User $user) {
    // dd($user->name);
    $user->update([
      "role" => "admin",
    ]);
    return 
      redirect(route('admin.user.index'))
      ->with("success", "User made as Admin 👍");
  }
}
