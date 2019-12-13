<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
  public $table = 'likes';
  public $timestamps = false;
  public $guarded = [];

  public function user(){
  return  $this->belongsTo('App\User','user_id');
  }
  public function post(){
  return  $this->belongsTo('App\Post','post_id');
  }

}
