<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  public $table = 'educations';
  public $timestamps = false;
  public $guarded = [];

  public function profile(){
    $this->belongsTo('App\profile','profile_id');
  }
}
