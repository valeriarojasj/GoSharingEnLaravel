<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
  public $table = 'posts';
  public $timestamps = false;
  public $guarded = [];

  public function interestArea(){
  return  $this->belongsTo('App\interestArea','interest_area_id');
  }

  public function postType(){
  return  $this->belongsTo('App\postType','post_type_id');
  }

  public function comment(){
    return $this->hasMany('App\Comment');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function likes()
  {
    return $this->hasMany('App\Like');
  }

}
