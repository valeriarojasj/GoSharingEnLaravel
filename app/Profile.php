<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  public $table = 'profiles';
  public $timestamps = false;
  public $guarded = [];

  public function experience(){
    return $this->hasMany('App\Experience','profile_id');
  }
  public function education(){
   return  $this->hasMany('App\Education','profile_id');
  }
  public function skill(){
    return $this->hasMany('App\Skill','profile_id');
  }
  public function user()
{
  return $this->belongsTo('App\User');
}
}
