<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  public $table = 'educations';
  public $timestamps = false;
  public $guarded = [];

  public function experience(){
    $this->hasMany('App\Experience','profile_id');
  }
  public function education(){
    $this->hasMany('App\Education','profile_id');
  }
  public function skill(){
    $this->hasMany('App\Skill','profile_id');
  }
  public function user()
{
  return $this->belongsTo('App\User');
}
}
