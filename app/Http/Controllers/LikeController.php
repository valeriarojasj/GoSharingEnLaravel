<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
use App\Like;
class LikeController extends Controller
{
    public function addLike($idPosteo){
      $like = new Like();
      $like->user_id = Auth::user()->id;
      $like->post_id = $idPosteo;
      $like->save();
      return ['mensaje' => Post::find($idPosteo)->likes->count()];


    }
    public function removeLike($idPosteo){
      Like::where('user_id', '=', Auth::user()->id)->where('post_id', '=', $idPosteo)->delete();

      
      return ['mensaje' => Post::find($idPosteo)->likes->count()];
    }

}
