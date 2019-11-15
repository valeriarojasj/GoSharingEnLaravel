@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/pagina-principal.css">
@endsection

@section('main')
<main>
  <div class="container-fluid">


<div class="row">
        <div class="col-md-3 col-sm-12 col-lg-3 col-xl-3 seccionIzquierda">
          <!--mi perfil-->

          <div class="miPerfil">


          <img value="" src= alt="">
          <h1>AQUI VA EL NOMBRE</h1>
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
            <li class="text-left textoPerfil">Estudiante</li>
          </ul>

          <h4 class="text-primary textoPerfil"><b class="titulos">Residencia Actual:</b></h4>
          <ul class="perfilContenido" type="none">
            <li class="text-left textoPerfil">Lima, Peru</li>
          </ul>
        </div><!--cierra el div de mi perfil-->
      </div> <!--cierra el div de la columna Izq-->



        <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6  seccionCentral">
          <div class="novedades">
          <div class="posteos">

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


                    <form method='post' action="" enctype="multipart/form-data">

                      @csrf

                      <div class="form-group">

                        <select class="custom-select" name="interestArea">
                          <option value="">Área de Interés</option>
                          @foreach($areasInteres as $interes)
                            <option value="{{$interes->id}}">{{$interes->interestAreas}}</option>

                          @endforeach
                        </select>
                      </div>     <!--cierra el div de las opciones de areas de interes-->

                    <div class="form-group">
                      <select class="custom-select" name="postType" >
                        <option value="">Tipo de Posteo</option>
                        @foreach($tiposPosteos as $tipoPosteo)
                        <option value="{{$tipoPosteo->id}}">{{$tipoPosteo->type}}</option>
                          @endforeach
                        </select>
                    </div> <!--cierra el div de las opciones de tipo de posteo-->

                    <div class="mb-3 divPosteo">
                      <textarea name="text" class="form-control textoPost" rows="6" id="validationTextarea" placeholder="Escribe tu mensaje aquí" required></textarea>
                      <div class="invalid-feedback">
                        <!--Aca puede ir el mensaje de error si esta vacio-->
                      </div>     <!--cierra el div del  mensaje de error del text area-->
                    </div>     <!--cierra el div del textArea-->


  <div class="listaBotones">
    <ul class="list-group list-group-horizontal" type="none">
            <div class="form-group fotoUpload mr-3">
              <li>
              <label for="image"><i class="fas fa-camera align-middle"></label></i>

              <input name="image" type="file" id="image" >

            </li>
            </div> <!--cierra el div de subir foto-->
        <div class="form-group videoUpload mr-3">
            <li>
              <label for="video"><i class="fas fa-video align-middle"></i></label>
              <input name="video" type="file" id="video">
              <span></span>
            </li>
        </div><!--cierra el div de subir video-->
        <div class="form-group docUpload mr-3">
          <li>
              <label for="document"><i class="fas fa-paperclip align-middle"></i></label>
              <input name="document" type="file" id="document">
                <span></span>
          </li>
        </div> <!--cierra el div de subir documento-->
      </ul>
  </div> <!--cierra el div de la lista de botones-->

      <span>ACA VA EL MENSAJE</span>







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
  <img class="avatarPosteo" src="" alt="">
  <div class="media-body nombrePosteo">
    <h5 class=quienPostea >NOMBRE DE LA PERSONA</h5>

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
              @if ($posteo->document)
               <a href="/storage/{{$posteo->document}}">{{$posteo->document}}</a>
             @endif

   </div>
   <div class="mb-3 divPosteo">
     <p class="textoPosteo">{{$posteo->text}}</p>
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
       <button class="btn btnAcciones" type="button" data-toggle="collapse" data-target="#collapseComentarios8" aria-expanded="false" aria-controls="collapseComentarios8">
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

   </div><!--cierra un posteo-->
   <div class="row">


    <div class="collapse col-md-12 col-sm-12 col-lg-12 col-xl-12 divComentarioNuevo" id="collapseComentarios8">
      <form class="" action="pagina-principal.php#areaComentarios" method="post">


          <textarea class = "comentarioNuevo" name="comentarioNuevo" rows="2" ></textarea>
   <div class="divBotonEnviar">


        <button name="submitComentario" type="submit" class="btn botonEnviar">Enviar</button>
        </div>
      </form>
        </div>


   </div>
   <div class="row rowListaComentarios">


     <div class="collapse col-md-12 col-sm-12 col-lg-12 col-xl-12 divListaComentarios" id="collapseComentarios8">
       <ul class="list-unstyled">
<li class="media rounded liComentarioLista p-2">

<img src="img/avatar-man.png" class="mr-3 avatarComentarios" alt="...">
<div class="media-body">
<b><!--Aca el nombre y apellido--></b> <!--Aca el texto del comentario-->
</div>
</li>
<li class="media my-4 rounded liComentarioLista p-2">
<img src="img/avatar-man.png"  class="mr-3 avatarComentarios" alt="...">
<div class="media-body">
<b><!--Aca el nombre y apellido--></b> <!--Aca el texto del comentario-->
</div>
</li>
<li class="media rounded liComentarioLista p-2">
<img src="img/avatar-man.png"  class="mr-3 avatarComentarios" alt="...">
<div class="media-body">
<b><!--Aca el nombre y apellido--></b> <!--Aca el texto del comentario-->
</div>
</li>
</ul>




</div> <!--CIERRA EL DIV DE LISTA DE COMENTARIOS-->


</div> <!--CIERRA EL ROW DE LISTA DE COMENTARIOS-->


   </div>



</div> <!--CIERRA NOVEDADES Y COMENTARIOS-->
@empty

@endforelse


</div><!--cierra novedades-->
        </div> <!--cierra el div de la columna central-->
        <div class="col-md-3 col-sm-12 col-lg-3 col-xl-3 seccionDerecha">
          <div class="publicidad">


          <!--publicidad-->
          <div class="avisoPublicitario">
            <h4 class="text-primary"><b class="titulos">Publicidad</b></h4>
            <a href="#"><img src="img/ad-1.jpg" class="img-fluid" alt=""></a>
          </div><!--cierra el div de aviso publicitario-->
          <div class="avisoPublicitario">
            <a href="#"><img src="img/ad-2.jpg" class="img-fluid" alt=""></a>
          </div><!--cierra el div de aviso publicitario-->
          <div class="avisoPublicitario">
            <a href="#"><img src="img/ad-3.jpg" class="img-fluid" alt=""></a>
          </div> <!--cierra el div de aviso publicitario-->
          <div class="avisoPublicitario">
            <a href="#"><img src="img/ad-4.jpg" class="img-fluid" alt=""></a>
          </div> <!--cierra el div de aviso publicitario-->

        </div> <!--cierra el div de publicidad-->
        </div><!--cierra el div de la columna derecha-->
      </div> <!--cierra el div de row-->
</div>
</main>

@endsection
