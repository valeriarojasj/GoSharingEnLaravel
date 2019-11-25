<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
  public $table = 'posts';
  public $timestamps = false;
  public $guarded = [];

  public function interestArea(){
    $this->belongsTo('App\interestArea','interest_area_id');
  }

  public function postType(){
    $this->belongsTo('App\postType','post_type_id');
  }
}
