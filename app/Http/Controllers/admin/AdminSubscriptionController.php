<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Services\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminSubscriptionController extends Controller
{
  public function __invoke(NewsLetter $newsletterList) {

    try {
      $list = $newsletterList->getList(null);
    } 
    catch (\Throwable $th) {
      throw ValidationException::withMessages(["Sorry we can't retrieve your Newsletter list"]);
    }

    // dd($newsletterList);
    
    return view('admin.subscriptions', [
      'list' => $list,
    ]);

  }
}
