<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class FriendsController extends Controller
{
  public function showFriends()
  {
      return view('friends');
  }
}
