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

    $solicitudes = Auth::user()->requestsOfThisUser()->get();


    $collectionSolicitudes = collect($solicitudes);
    $invitaciones = Auth::user()->invitationsOfThisUser()->get();
    $collectionInvitaciones = collect($invitaciones);

    $cuantosAmigos = $amigos->count();
    $cuantasSolicitudes = $collectionSolicitudes->count();
    $cuantasInvitaciones = $collectionInvitaciones->count();



      return view('friends',compact('amigos','cuantosAmigos','solicitudes','cuantasSolicitudes','invitaciones','cuantasInvitaciones'));
  }



  public function findFriends()
{
  $otros = User::where('id','!=',Auth::user()->id)->get();




  $amigos = Auth::user()->allFriends();
  $collectionAmigos = collect($amigos);
  $solicitudes = Auth::user()->requestsOfThisUser()->get();

  $collectionSolicitudes = collect($solicitudes);
  $invitaciones = Auth::user()->invitationsOfThisUser()->get();

  $collectionInvitaciones = collect($invitaciones);

$cuantosAmigos = $collectionAmigos->count();
$cuantasSolicitudes = $collectionSolicitudes->count();
$cuantasInvitaciones = $collectionInvitaciones->count();

  $idAmigos = $amigos->pluck('id');
  $idOtros = $otros->pluck('id');
  $idInvitaciones = $invitaciones->pluck('id');
  $idSolicitudes = $solicitudes->pluck('id');

  $noAmigosId1=$idOtros->diff($idAmigos);
  $noAmigosId2=$noAmigosId1->diff($idInvitaciones);
  $noAmigosId=$noAmigosId2->diff($idSolicitudes);


  $noAmigos = $otros->whereIn('id', $noAmigosId);




    return view('findFriends',compact('noAmigos', 'amigos','cuantosAmigos','solicitudes','cuantasSolicitudes','invitaciones','cuantasInvitaciones'));

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

  public function acceptFriend($id)
  {
    $user = Auth::user();
    $estaSolicitud = Friendship::where('user_id', '=',$id )
                                ->where('friend_id', '=',$user->id )
                                ->first()->update(['status' => 'confirmed']);

    return response()->json(['message' => 'Invitación Aceptada']);
  }

  public function searchFriends($string)
  {

    $user = Auth::user();
    $otros = User::where('id','!=',$user->id);


    $searchFirstName= $otros->where('first_name', 'like',"%$string%");
    $search= $otros->orwhere('last_name', 'like',"%$string%")->get();





    return response()->json(['search'=>$search]);
  }

public function showSearch($string)
{
  $user = Auth::user();
  $otros = User::where('id','!=',$user->id);


  $searchFirstName= $otros->where('first_name', 'like',"%$string%");
  $search= $otros->orwhere('last_name', 'like',"%$string%")->get();





}
