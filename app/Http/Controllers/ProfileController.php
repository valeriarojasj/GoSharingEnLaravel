<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
class ProfileController extends Controller
{
    public function showProfileForm(){
      return view('/formProfile');
    }

    public function addProfile(Request $req)
    {

      //encuentra el perfil de la persona logueada
      $usuarioLog = Auth::user()->id;
    //  $profile=Profile::where('user_id', '=',$usuarioLog) // este es el perfil de quien esta logueado
    //  ->get();
    $personalTitle=$req['personalTitle'];
    $aboutMe=$req['aboutMe'];
    $gender=$req['gender'];
    $gender=$req['gender'];


    $newProfile=  \App\Profile::updateOrCreate(['user_id' => $usuarioLog] , ['personalTitle' => $personalTitle, 'aboutMe'=>$aboutMe, 'gender'=>$gender]);

  return view('/formProfile', compact('newProfile'));



    }
    public function showMyProfile()
    {

      //encuentra el perfil de la persona logueada
      $usuarioLog = Auth::user()->id;
    //  $profile=Profile::where('user_id', '=',$usuarioLog) // este es el perfil de quien esta logueado
    //  ->get();


    $miPerfil = Profile::where('user_id', '=', Auth::user()->id)
                ->get();


    return view('/formProfile', compact('miPerfil'));



    }

}
