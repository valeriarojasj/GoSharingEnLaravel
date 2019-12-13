<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Post;
class LikeController extends Controller
{
    public function addLike(){
      $like = new Like();
      $like->user_id = Auth::user()->id;
      $like->user_id = $idPosteo;
      $like->save();
      $array = ['mensaje' => 'Like Agregado'];
      return $array;
    }
    public function removeLike(){
      $array = ['mensaje' => 'Elimino Like'];
      return $array;
    }
}
