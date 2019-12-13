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
      try{
        $like->save();
        return ['mensaje' => 'Todo ok :)'];
      }
      catch(Exception $e){
        $array = ['mensaje' => 'No se agrego'];
        return $array;
      }

    }
    public function removeLike($idPosteo){
      Like::where('user_id', '=', Auth::user()->id)->where('post_id', '=', $idPosteo)->delete();

      $array = ['mensaje' => 'Elimino Like'];
      return $array;
    }
}
