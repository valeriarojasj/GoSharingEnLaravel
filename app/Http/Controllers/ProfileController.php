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

    public function addProfile(Request $req){

      $rules=[
        'personalTitle'=> "nullable|max:250",
        'aboutMe'=> "nullable",
        'gender'=> "nullable",
        'interest'=> "nullable",
        'currentCountry'=> "nullable",
        'avatar'=> "nullable|mimes:jpeg,jpg,png,gif,bmp|between:10,8000",

      ];
      $messages = [
        'personalTitle.max'=> 'El titulo personal puede tener maximo 250 caracteres',
        'avatar.between' => 'El tamaño del archivo debe ser entre 1 y 8 MB',
        'avatar.mimes'=> 'El archivo no es una imagen',
      ];
      $this->validate($req, $rules, $messages);



      //encuentra el perfil de la persona logueada
      $usuarioLogId = Auth::user()->id;

      $personalTitle=$req['personalTitle'];
      $aboutMe=$req['aboutMe'];
      $gender=$req['gender'];
      $interest=$req['interest'];
      $currentCountry=$req['paises'];
      $usuarioLog = Auth::user();
      if($req->file('image')){

        $rutaImagen= $req->file('image')->store('public');
        $nombreImagen=basename($rutaImagen);


        $miUsuario =\App\User::find($usuarioLogId);
        $miUsuario->avatar = $nombreImagen;
        $miUsuario->save();


      }
    $miPerfil=  \App\Profile::updateOrCreate(['user_id' => $usuarioLogId] , ['personalTitle' => $personalTitle, 'aboutMe'=>$aboutMe, 'gender'=>$gender, 'interest'=>$interest, 'currentCountry'=>$currentCountry]);

    return view('/formProfile', compact('miPerfil', 'miUsuario'));
  }
}
