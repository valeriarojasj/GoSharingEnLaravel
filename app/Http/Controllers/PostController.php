<?php


namespace App\Http\Controllers;
ini_set('upload_max_size','100M');
use Illuminate\Http\Request;
use App\Post;
use App\interestArea;
use App\postType;
use Auth;
use App\User;
Use App\Like;
use App\Profile;
use App\Friendship;
use Illuminate\Support\Facades\Route;
class PostController extends Controller
{
  public function showAllPosts()
  {
    
    $title = 'main';
    //$posteos = Post::orderBy('id', 'DESC')->get();
    $posteos = Post::with(['user', 'likes', 'comment'])
    ->orderBy('id','desc')
    ->get();

    $areasInteres = interestArea::all();
    $tiposPosteos = postType::all();
    $miPerfil = Profile::where('profiles.user_id', '=', Auth::user()->id)
    ->get()->first();


                $amigos = Auth::user()->allFriends();

                $solicitudes = Auth::user()->requestsOfThisUser()->get();

                $collectionSolicitudes = collect($solicitudes);
                $invitaciones = Auth::user()->invitationsOfThisUser()->get();
                $collectionInvitaciones = collect($invitaciones);

                $cuantosAmigos = $amigos->count();
                $cuantasSolicitudes = $collectionSolicitudes->count();
                $cuantasInvitaciones = $collectionInvitaciones->count();


    return view('/main', compact('posteos','title','areasInteres','tiposPosteos','miPerfil', 'cuantasSolicitudes', 'cuantasInvitaciones','cuantosAmigos'));
  }

  public function showMyPosts()
  {


    $title = 'profile';
    $posteos = Auth::user()->posts->sortByDesc('id');
    $areasInteres = interestArea::all();
    $tiposPosteos = postType::all();


    return view('/profile', compact('posteos','title','areasInteres','tiposPosteos'));
  }


  public function addPost(Request $req)
  {


    $rules=[
      'post_text'=> "string|min:3|max:500",
      'image'=> "nullable|image|between:10,25000",
      'video' => "mimes:avi,mpeg,quicktime,mp4,mpg|max:100000|nullable",
      'file' => "mimes:doc,docx,pdf, ppt, pptx, xls, xlsx|nullable|max:8000"
    ];
    $messages = [
      'post_text.min'=> 'El mensaje es muy corto',
      'post_text.max'=> 'El mensaje es muy largo',
      'image.image'=> 'El archivo no es una imagen',
      'image.between' => 'El tamaño del archivo debe ser entre 1 y 25 MB',
     'video.mimetypes' => 'El video no coincide con las extensiones aceptadas(avi, mpeg, quicktime, mp4 y mpg)',
      'video.max' => 'El video supera los 100MB',
      'file.mimes' => 'El archivo no coincide con las extensiones aceptadas(doc, docx, pdf, ppt, pptx, xls, xlsx)',
      'file.max' => 'El archivo supera los 8MB'

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
    if($req->file('file')){
      $rutaDoc= $req->file('file')->store('public');
      $nombreDoc=basename($rutaDoc);
      $posteo->file = $nombreDoc;
    }
    $posteo->post_text = $req->post_text;
    $posteo->user_id = Auth::user()->id;
    $posteo->interest_area_id = $req->interest_area;
    $posteo->post_type_id = $req->post_type;



    $posteo->save();
    $currentRoute= Route::getFacadeRoot()->current()->uri();
    return redirect("/$currentRoute");


  }

}
