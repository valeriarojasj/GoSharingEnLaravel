<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
  public function showMessages()
  {
      return view('messages');
  }
}
