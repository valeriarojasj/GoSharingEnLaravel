<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
  public $table = 'answers';
  public $primaryKey = 'id';
  public $timestamps = false;
  public $guarded = [];
  protected $fillable = [
      'image','video','file','answer_text'];

      public function user(){
       return  $this->belongsTo('App\User','user_id');
      }

      public function comment(){
      return   $this->belongsTo('App\Comment','comment_id');
      }
      public function answer(){
      return   $this->hasMany('App\Answer','answer_id');
      }
      public function likes()
      {
        return $this->hasMany('App\Like');
      }
}
