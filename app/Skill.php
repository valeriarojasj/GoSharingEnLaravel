<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
  public $table = 'skills';
  public $timestamps = false;
  public $guarded = [];

  public function profile(){
    $this->belongsTo('App\profile','profile_id');
  }
}
