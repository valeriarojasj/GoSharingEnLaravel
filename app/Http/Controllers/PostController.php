<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\interestArea;
use App\postType;
use Auth;
class PostController extends Controller
{
  public function showAllPosts()
  {
    $title = 'main';
    $posteos = Post::orderBy('id', 'DESC')->get();
    $areasInteres = interestArea::all();
    $tiposPosteos = postType::all();
    

    return view('/main', compact('posteos','title','areasInteres','tiposPosteos'));
  }

  public function showMyPosts()
  {
    $title = 'profile';
    //aca tenemos que filtrar por mis posteos peroaun no podemos porque no tenemos session.
    $posteos = Post::orderBy('id', 'DESC')->get();


    return view('/main', compact('posteos','title'));
  }


  public function addPost(Request $req)
  {

    $posteo = new Post();
    if($req->file('image')){

      $rutaImagen= $req->file('image')->store('public');
      $nombreImagen=basename($rutaImagen);
      $posteo->image = $nombreImagen;
    }
    if($req->file('video')){
      $rutaVideo= $req->file('video')->store('public');
      $nombreVideo=basename($rutaVideo);
      $posteo->video = $nombreVideo;
    }
    if($req->file('document')){
      $rutaDoc= $req->file('document')->store('public');
      $nombreDoc=basename($rutaDoc);
      $posteo->document = $nombreDoc;
    }
    $posteo->post_text = $req->post_text;
  $posteo->user_id = Auth::user()->id;
    $posteo->interest_area_id = $req->interest_area;
    $posteo->post_type_id = $req->post_type;



    $posteo->save();
    return redirect('/main');


  }
}
