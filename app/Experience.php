<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
  public $table = 'experiences';
  public $timestamps = false;
  public $guarded = [];

  public function profile(){
    $this->belongsTo('App\profile','profile_id');
  }
}
