<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
  public function showAllPosts()
  {
    $title = 'main';
    $posteos = Post::all();
    return view('/main', compact('posteos','title'));
  }
  public function addPost(Request $req)
  {
    $posteo = new Post();
    
    $rutaImagen= $req->file('image')->store('public');
    $nombreImagen=basename($rutaImagen);
    $rutaVideo= $req->file('video')->store('public');
    $nombreVideo=basename($rutaVideo);
    $rutaDoc= $req->file('document')->store('public');
    $nombreDoc=basename($rutaDoc);
    $posteo->text = $req->text;
    $posteo->image = $nombreImagen;
    $posteo->video = $nombreVideo;
    $posteo->document = $nombreDoc;
    $posteo->save();
    return redirect('/main');


  }
}
