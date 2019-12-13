<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Comment extends Model
{
  public $table = 'comments';
  public $timestamps = false;
  public $guarded = [];
  protected $fillable = [
      'image','video','file','comment_text'
  ];

  public function user(){
   return  $this->belongsTo('App\User','user_id');
  }

  public function post(){
  return   $this->belongsTo('App\Post','post_id');
  }
}
