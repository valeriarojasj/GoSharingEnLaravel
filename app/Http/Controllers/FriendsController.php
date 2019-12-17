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
  $otros = User::where('id','!=',Auth::user()->id);


$search='Gomez';


  $searchFirstName= $otros->where('first_name', 'LIKE',"%{$search}%")->get();
  $searchLastName= $otros->where('last_name', 'LIKE',"%{$search}%")->get();
SQLSTATE[HY000] [1045] Access denied for user 'gosharing'@'localhost' (using password: YES) (SQL: select count(*) as aggregate from `users` where `email` = luis@cano.com)
$searchFullName=$searchLastName->merge($searchFirstName);


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

  public function searchFriend($string)
  {

    $user = Auth::user();
    $otros = User::where('id','!=',Auth::user()->id)->get();


    $searchLastName= $otros->where('last_name', 'ilike','%'. Ana .'%')->get();
    $search = $searchLastName->merge($searchFirstName);



    return response()->json(['usuarios' => $search]);
  }





}
