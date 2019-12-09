<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendship extends Model
{
  public $table = 'friendships';
  public $timestamps = false;
  public $guarded = [];

//  public function friendships(){
  //return  $this->belongsToMany('App\User','friendships','friend_id','user_id');
  //}
}
