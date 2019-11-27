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
    //$posteos = Post::orderBy('id', 'DESC')->get();
    $posteos = Post::select('posts.*', 'users.avatar', 'users.first_name', 'users.last_name')
                ->join('users', 'users.id', '=', 'posts.user_id')
                ->get();
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
dd($req->file('image')->getMimeType());
    $rules=[
      'post_text'=> "string|min:3|max:500",
      'image'=> "nullable|image|between:10,25000",
      'video' => "mimes:avi,mpeg,quicktime,mp4,mpg|size:100000|nullable",
      'document' => "mimes:doc,docx,pdf, ppt, pptx, xls, xlsx|nullable|size:8000"
    ];
    $messages = [
      'post_text.min'=> 'El mensaje es muy corto',
      'post_text.max'=> 'El mensaje es muy largo',
      'image.image'=> 'El archivo no es una imagen',
      'image.between' => 'El tamaño del archivo debe ser entre 1 y 25 MB',
     'video.mimetypes' => 'El video no coincide con las extensiones aceptadas(avi, mpeg, quicktime, mp4 y mpg)',
      'video.size' => 'El video supera los 100MB',
      'document.mimes' => 'El archivo no coincide con las extensiones aceptadas(doc, docx, pdf, ppt, pptx, xls, xlsx)',
      'document.size' => 'El archivo supera los 8MB'

    ];
    $this->validate($req, $rules, $messages);

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
