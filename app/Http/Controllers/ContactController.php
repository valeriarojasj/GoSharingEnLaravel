<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function showContact()
  {
      return view('contact');
  }
}
