<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationsController extends Controller
{
  public function showDonations()
  {
      return view('donations');
  }
}
