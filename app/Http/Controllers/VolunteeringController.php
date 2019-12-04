<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteeringController extends Controller
{
  public function showVolunteering()
  {
      return view('volunteering');
  }
}
