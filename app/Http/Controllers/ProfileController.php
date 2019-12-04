<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
class ProfileController extends Controller
{
    public function showProfileForm(){

      $usuarioLog = Auth::user()->id;
       $miPerfil=Auth::user()->profile;

      return view('/formProfile', compact('miPerfil'));
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
    $interest=$req['interest'];


    $miPerfil=  \App\Profile::updateOrCreate(['user_id' => $usuarioLog] , ['personalTitle' => $personalTitle, 'aboutMe'=>$aboutMe, 'gender'=>$gender, 'interest'=>$interest]);

  return view('/formProfile', compact('miPerfil'));



    }


}
