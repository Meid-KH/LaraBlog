<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        return view('authors', [
            'authors' => User::latest()->get()
        ]);
    }

    public function show(User $author) {
        return view('author', [
            'author' => $author
        ]);
    }

}
