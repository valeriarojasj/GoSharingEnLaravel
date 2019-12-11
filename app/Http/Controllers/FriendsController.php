<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Profile;
use App\Friendship;

class FriendsController extends Controller
{
  public function showFriends()
  {
    $amigos = Auth::user()->allFriends();

      return view('friends',compact('amigos'));
  }

  public function findFriends()
{
  $otros = User::where('id','!=',Auth::user()->id)->get();

  $amigos = Auth::user()->allFriends();
  $idAmigos = $amigos->pluck('id');
  $idOtros = $otros->pluck('id');

  $noAmigosId=$idOtros->diff($idAmigos);
  $noAmigos = $otros->whereIn('id', $noAmigosId);




    return view('findFriends',compact('noAmigos'));

  }




  public function addFriend($id)
  {
    $misAmigos= Auth::user()->friendsOfThisUser()->attach($id);

      return response()->json(['message' =>'Solicitud enviada']);
  }

  public function removeFriend($id)
  {
    $removerAmigo =  Auth::user()->friendsOfThisUser()->detach($id);

    return response()->json(['message' =>'Amigo Eliminado']);
  }



}
