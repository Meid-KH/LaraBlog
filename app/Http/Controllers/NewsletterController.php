<?php

namespace App\Http\Controllers;

use App\Services\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(NewsLetter $newsletter) {
        request()->validate([
            "email" => 'required|email'
        ]);
        try {
            $newsletter->subscribe(request('email'), null);
        } 
        catch (\Throwable $th) {
            throw ValidationException::withMessages(["Sorry we can't sign you in our Newsletter list"]);
        }
        return redirect()
            ->back()
            ->with('success','Congrats🎉, Your has been added toour Newsletter!');

    }
   
}
