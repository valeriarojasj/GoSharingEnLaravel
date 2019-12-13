@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/pagina-principal.css">
  <link rel="stylesheet" href="/css/header.css">

@endsection

@section('main')
<script type="text/javascript" src="/js/validaciones.js"></script>
<script type="text/javascript" src="/js/like.js"></script>

<main>
  <div class="container-fluid">


<div class="row">
        <div class="col-md-3 col-sm-12 col-lg-3 col-xl-3 seccionIzquierda mb-sm-3">
          <!--mi perfil-->

          <div class="miPerfil">


          <img value="" src="/storage/{{Auth::user()->avatar}}" alt="">
          <h1>{{Auth::user()->first_name }} {{Auth::user()->last_name}}</h1>
          <div class="caja perfilPrincipal pt-3">
            <h4 class="text-primary"><b class="titulos">Experiencia: </b></h4>
            <ul class="perfilContenido" type="none">
              <li class="text-left subtitulos"><b class="subtitulos">Directora</b></li>
              <li class="text-left textoPerfil">Fundacion para la niñez ABGS</li>
              <li class="text-left textoPerfil">Lima, Peru</li>
              <li class="text-left textoPerfil">Jun 2018-Abr 2019</li>
            </ul>

            <ul class="perfilContenido" type="none">
              <li class="text-left textoPerfil"><b class="subtitulos">Coordinadora de Area de Voluntariado</b></li>
              <li class="text-left textoPerfil">Fundacion de niños GXTZ</li>
              <li class="text-left textoPerfil">Buenos Aires, Argentina</li>
              <li class="text-left textoPerfil">Feb 2011 - May 2018</li>
            </ul>

        </div>
          <h4 class="subtitulos"><b class="titulos">Ocupación Actual:</b></h4>
          <ul class="perfilContenido" type="none">
            <li class="text-left textoPerfil" name="personalTitle">{{$miPerfil->personalTitle??""}}</li>
          </ul>

          <h4 class="text-primary textoPerfil"><b class="titulos">Residencia Actual:</b></h4>
          <ul class="perfilContenido" type="none">
            <li class="text-left textoPerfil">Lima, Peru</li>
          </ul>
        </div><!--cierra el div de mi perfil-->
      </div> <!--cierra el div de la columna Izq-->



        <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6 mb-sm-3 mb-5   seccionCentral">
          <div class="novedades mb-sm-3 mb-5">
          <div class="posteos ">

            <!-- Button trigger modal -->
          <button type="button" id="postear" class="btn botonPostear" data-toggle="modal" data-target="#Modal">
          Quieres postear algo?
          </button>

          <!-- Modal -->
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
             <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title tituloModal" id="ModalLabel">Qué quieres compartir?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <div class="modal-body">


                    <form method='post' action="/main" enctype="multipart/form-data" id='form-post'>

                      @csrf

                      <div class="form-group">

                        <select class="custom-select" name="interest_area" id='interest_area'>
                          <option value="">Área de Interés</option>
                          @foreach($areasInteres as $interes)
                            <option value="{{$interes->id}}">{{$interes->name}}</option>

                          @endforeach
                        </select>
                      </div>     <!--cierra el div de las opciones de areas de interes-->

                    <div class="form-group">
                      <select class="custom-select" name="post_type" id='post_type'>
                        <option value="">Tipo de Posteo</option>
                        @foreach($tiposPosteos as $tipoPosteo)
                        <option value="{{$tipoPosteo->id}}">{{$tipoPosteo->name}}</option>
                          @endforeach
                        </select>
                    </div> <!--cierra el div de las opciones de tipo de posteo-->

                    <div class="mb-3 divPosteo">
                      <textarea name="post_text" class="form-control textoPost" rows="6" id="validationTextarea" placeholder="Escribe tu mensaje aquí" required></textarea>
                      <div class="invalid-feedback">

                      </div>     <!--cierra el div del  mensaje de error del text area-->
                    </div>     <!--cierra el div del textArea-->


  <div class="listaBotones">
    <ul class="list-group list-group-horizontal" type="none">
            <div class="form-group fotoUpload mr-3">
              <li>
              <label for="image-post"><i class="fas fa-camera align-middle"></i></label>

              <input name="image" type="file" id="image-post" >

            </li>
            </div> <!--cierra el div de subir foto-->
        <div class="form-group videoUpload mr-3">
            <li>
              <label for="video-post"><i class="fas fa-video align-middle"></i></label>
              <input name="video" type="file" id="video-post">
              <span></span>
            </li>
        </div><!--cierra el div de subir video-->
        <div class="form-group docUpload mr-3">
          <li>
              <label for="file-post"><i class="fas fa-paperclip align-middle"></i></label>
              <input name="file" type="file" id="file-post">
                <span></span>
          </li>
        </div> <!--cierra el div de subir documento-->
      </ul>
      <div id="nombreArchivo">

      </div>
  </div> <!--cierra el div de la lista de botones-->

  <span> @error('video') {{$message}} @enderror </span>
  <span> @error('image') {{$message}} @enderror </span>
  <span> @error('file') {{$message}} @enderror </span>







</div> <!--cierra el div del body del modal-->

                <div class="modal-footer">
                        <button type="button " class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btnGuardar" value="Enviar">Guardar Cambios</button>
                </div> <!--cierra el footer del modal-->
                    </form><!--cierra el form de agregar posteo-->

    </div><!--cierra el contenido del modal-->
  </div> <!--cierra el dialogo del modal-->
</div><!--cierra el modal-->
</div>  <!--cierra posteos-->
<div class="tituloSeccionCentral">
<h2 class="text-left">Novedades</h2>
</div>


@forelse ($posteos as $posteo)



<div class="novedadYcomentarios">
<div class="novedad "><!--comienza un posteo-->
  <div class=" perfilPost media">
  <img class="avatarPosteo" src="/storage/{{$posteo->avatar}}" alt="">
  <div class="media-body nombrePosteo">
    <h5 class="quienPostea" >{{$posteo->first_name}} {{$posteo->last_name}}</h5>

    </div>
  </div>


            <div class="imgOvideo">
              @if ($posteo->image)
             <img src="/storage/{{$posteo->image}}" class="imagenPosteo" alt="">
           @endif
            @if ($posteo->video)
             <video width="100%" poster="" controls>
             <source src="/storage/{{$posteo->video}}" class="videoPosteo" alt="" type"video/*">
            @endif
            <!-- ESTE ENLACE ES PARA LINK DE UN DOCUMENTO-->
              @if ($posteo->file)
               <a href="/storage/{{$posteo->file}}">{{$posteo->file}}</a>
             @endif

   </div>
   <div class="mb-3 divPosteo">
     <p class="textoPosteo">{{$posteo->post_text}}</p>
     <div class="invalid-feedback">
       <!--Aca puede ir el mensaje de error si esta vacio-->
     </div>     <!--cierra el div del  mensaje de error del text area-->
   </div>     <!--cierra el div del textArea-->


   <div class="list-group list-group-horizontal acciones">
     <div class="divMeGusta">
       <button class="btn btnAcciones" type="button" id="meGustaButton">
         <i class=" iconosAcciones fas fa-thumbs-up">      </i> Me gusta
       </button>

     </div>
     <div class="dropdown dropComentar">
       <button class="btn btnAcciones" type="button" data-toggle="collapse" data-target="#collapseComentarios{{$posteo->id}}" aria-expanded="false" aria-controls="collapseComentarios{{$posteo->id}}">
         <i class=" iconosAcciones fas fa-comment-alt"></i> Comentar
       </button>


     </div>
     <div class="dropdown dropCompartir">
       <button class="btn btnAcciones dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="  iconosAcciones fas fa-share"> </i> Compartir
       </button>
       <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
         <a class="dropdown-item" href="#">Enviar como mensaje</a>
         <a class="dropdown-item" href="#">Enviar como publicación</a>
       </div>
     </div>

     <span> @error('video') <script>
   window.onload = function(){
     $("#postear").click();
   };
   </script>';{{$message}} @enderror </span>
       <span> @error('image')  <script>
     window.onload = function(){
       $("#postear").click();
     };
     </script> {{$message}} @enderror </span>
       <span> @error('file')  <script>
     window.onload = function(){
       $("#postear").click();
     };
     </script>'{{$message}} @enderror </span>

   </div><!--cierra un posteo-->
   <div class="row">


    <div class="collapse col-md-12 col-sm-12 col-lg-12 col-xl-12 divComentarioNuevo" id="collapseComentarios{{$posteo->id}}">
      <form  action="/posts/{{$posteo->id}}/comments" method="post" enctype="multipart/form-data" id='form-comment'>

        @csrf
          <textarea class = "comentarioNuevo" name="comment_text" rows="2" ></textarea>
          <div class="listaBotones">
            <ul class="list-group list-group-horizontal" type="none">
                    <div class="form-group  fotoComment mr-3 ml-3">
                      <li>
                      <label for="image-comment{{$posteo->id}}"><i class="fas fa-camera align-middle"></i></label>

                      <input name="image-comment" class = "commentFiles" id="image-comment{{$posteo->id}}" type="file" >

                    </li>
                    </div> <!--cierra el div de subir foto-->
                <div class="form-group  videoComment mr-3">
                    <li>
                      <label for="video-comment{{$posteo->id}}"><i class="fas fa-video align-middle"></i></label>
                      <input name="video-comment" class = "commentFiles" id="video-comment{{$posteo->id}}" type="file">
                      <span></span>
                    </li>
                </div><!--cierra el div de subir video-->
                <div class="form-group docComment mr-3">
                  <li>
                      <label for="file-comment{{$posteo->id}}"><i class="fas fa-paperclip align-middle"></i></label>
                      <input name="file-comment" class = "commentFiles" id="file-comment{{$posteo->id}}" type="file">
                        <span></span>
                  </li>
                </div> <!--cierra el div de subir documento-->
              </ul>
              <div class="archivoComentario">

              </div>

          </div> <!--cierra el div de la lista de botones-->



   <div class="divBotonEnviar">




        <button name="submitComentario" type="submit" value="enviarComentario" class="btn botonEnviar">Enviar</button>
        </div>
      </form> <!-- Cierre de formulario comentario-->
        </div>


   </div>

   @forelse($posteo->comment as $comentario)
   <div class="row rowListaComentarios">


     <div class="collapse col-md-12 col-sm-12 col-lg-12 col-xl-12 divListaComentarios" id="collapseComentarios{{$posteo->id}}">
       <ul class="list-unstyled">


<li class="media rounded liComentarioLista p-2">

<img src="/storage/{{$comentario->user->avatar}}" class="mr-3 avatarComentarios" alt="...">
<div class="media-body">
<b>{{$comentario->user->first_name }} {{$comentario->user->last_name}}</b>
<div class="textFile">


<p class="text-justify">{{$comentario->comment_text}}</p>

            <div class="imgOvideo">
              @if ($comentario->image)
             <img src="/storage/{{$comentario->image}}" class="imagenPosteo" alt="">
           @endif
            @if ($comentario->video)
             <video width="100%" poster="" controls>
             <source src="/storage/{{$comentario->video}}" class="videoPosteo" alt="" type"video/*">
            @endif
            <!-- ESTE ENLACE ES PARA LINK DE UN DOCUMENTO-->
              @if ($comentario->file)
               <a href="/storage/{{$comentario->file}}">{{$comentario->file}}</a>
             @endif

             </div>


   </div>
</div>
</li>

</ul>




</div> <!--CIERRA EL DIV DE LISTA DE COMENTARIOS-->


</div> <!--CIERRA EL ROW DE LISTA DE COMENTARIOS-->

@empty

@endforelse

   </div>



</div> <!--CIERRA NOVEDADES Y COMENTARIOS-->
@empty

@endforelse


</div><!--cierra novedades-->
        </div> <!--cierra el div de la columna central-->
        <div class="col-md-3 col-sm-12 col-lg-3 col-xl-3 seccionDerecha mb-sm-5 ">
          <div class="publicidad mb-3">


          <!--publicidad-->
          <div class="avisoPublicitario">
            <h4 class="text-primary"><b class="titulos">Mis Contactos</b></h4>
            <ul>
              <li class="listaAmigos"><a href="/friends">Solicitudes de Amistad ()</a></li>
              <li class="listaAmigos"><a href="/friends">Invitaciones ()</a></li>
              <li class="listaAmigos"><a href="/friends">Amigos ()</a></li>
            </ul>



          </div><!--cierra el div de aviso publicitario-->

        </div> <!--cierra el div de publicidad-->

          <div class="publicidad mb-5">


          <!--publicidad-->
          <div class="avisoPublicitario">
            <h4 class="text-primary"><b class="titulos">Publicidad</b></h4>
            <a href="#"><img src="/images/ad-1.jpg" class="img-fluid" alt=""></a>
          </div><!--cierra el div de aviso publicitario-->
          <div class="avisoPublicitario">
            <a href="#"><img src="/images/ad-2.jpg" class="img-fluid" alt=""></a>
          </div><!--cierra el div de aviso publicitario-->
          <div class="avisoPublicitario">
            <a href="#"><img src="/images/ad-3.jpg" class="img-fluid" alt=""></a>
          </div> <!--cierra el div de aviso publicitario-->
          <div class="avisoPublicitario">
            <a href="#"><img src="/images/ad-4.jpg" class="img-fluid" alt=""></a>
          </div> <!--cierra el div de aviso publicitario-->

        </div> <!--cierra el div de publicidad-->
        </div><!--cierra el div de la columna derecha-->
      </div> <!--cierra el div de row-->
</div>
</main>

@endsection
