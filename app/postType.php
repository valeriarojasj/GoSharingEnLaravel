<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class postType extends Model
{
  public $table = 'post_types';
  public $timestamps = false;
  public $guarded = [];

  public function posts(){
    $this->hasMany('App\post','postType_id');
  }
}
