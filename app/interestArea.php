<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class interestArea extends Model
{
    public $table = 'interest_areas';
    public $timestamps = false;
    public $guarded = [];

    public function posts(){
      $this->hasMany('App\interestArea','interestArea_id');
  }

}
