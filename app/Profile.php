<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  public $table = 'educations';
  public $timestamps = false;
  public $guarded = [];

  public function profile(){
    $this->hasMany('App\Experience','profile_id');
  }
}
