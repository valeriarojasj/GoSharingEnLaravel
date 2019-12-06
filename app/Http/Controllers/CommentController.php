<?php

namespace App\Http\Controllers;
ini_set('upload_max_size','100M');

use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\Profile;
use App\User;
use App\Comment;

class CommentController extends Controller
{

    public function addComment(Request $req,int $id){

      $rules=[
        'comment_text'=> "string|min:3|max:500",
        'image'=> "nullable|image|between:10,25000",
        'video' => "mimes:avi,mpeg,quicktime,mp4,mpg|max:100000|nullable",
        'file' => "mimes:doc,docx,pdf, ppt, pptx, xls, xlsx|nullable|max:8000"
      ];
      $messages = [
        'comment_text.min'=> 'El mensaje es muy corto',
        'comment_text.max'=> 'El mensaje es muy largo',
        'image.image'=> 'El archivo no es una imagen',
        'image.between' => 'El tamaño del archivo debe ser entre 1 y 25 MB',
        'video.mimetypes' => 'El video no coincide con las extensiones aceptadas(avi, mpeg, quicktime, mp4 y mpg)',
        'video.size' => 'El video supera los 100MB',
        'file.mimes' => 'El archivo no coincide con las extensiones aceptadas(doc, docx, pdf, ppt, pptx, xls, xlsx)',
        'file.size' => 'El archivo supera los 8MB'
      ];

      $this->validate($req, $rules, $messages);

        $comentario = new Comment();

        if($req->file('image')){

          $rutaImagen= $req->file('image')->store('public/images');
          $nombreImagen=basename($rutaImagen);
          $comentario->image = $nombreImagen;
        }
        if($req->file('video')){
          $rutaVideo= $req->file('video')->store('public');
          $nombreVideo=basename($rutaVideo);
          $comentario->video = $nombreVideo;
        }
        if($req->file('file')){
          $rutaDoc= $req->file('file')->store('public');
          $nombreDoc=basename($rutaDoc);
          $comentario->file = $nombreDoc;
        }
        $comentario->comment_text = $req->comment_text;
        $comentario->user_id = Auth::user()->id;
        $comentario->post_id = $id;



        $comentario->save();
        return redirect('/main');

    }
    public function showComment(Request $req, int $id){

      //$posteos = Post::orderBy('id', 'DESC')->get();







    }

}
