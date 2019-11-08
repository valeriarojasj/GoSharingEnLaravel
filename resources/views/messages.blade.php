@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/verMensajes.css">
@endsection
@section('main')
  <main>
    <div class="row">
  <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 titulo">
    <h1>Mis mensajes</h1>
  </div>
  <div class="col-md-11 col-sm-11 col-lg-9 col-xl-9 subtitulo">
    <h2>Nuevos mensajes (3)</h2>
  </div>
  <div class="col-md-1 col-sm-1 col-lg-3 col-xl-3">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-blanco" data-toggle="modal" data-target="#exampleModal">
      Mensaje nuevo <ion-icon name="mail"></ion-icon>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nuevo mensaje </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="">
              <form class="form-inline">
    <div class="form-group">
      <label for="inputPassword6">Enviar a:</label>
      <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">

    </div>
  </form>
    <div class="mb-3">
      <label for="validationTextarea">Mensaje</label>
      <textarea class="form-control " id="validationTextarea" placeholder="Escribe aquí tu mensaje"></textarea>
    </div>

    <div class="custom-control custom-checkbox mb-3">
      <input type="checkbox" class="custom-control-input" id="customControlValidation1">
      <label class="custom-control-label" for="customControlValidation1">Marcar como importante</label>
    </div>

    <div class="form-group">
      <select class="custom-select" required>
        <option value="">Elegir asunto</option>
        <option value="1">Invitación evento</option>
        <option value="2">Pedido de donación</option>
        <option value="3">Agradecimiento</option>
        <option value="3">Otro</option>
      </select>

    </div>

    <div class="listaBotones">
      <ul class="list-group list-group-horizontal" type="none">
              <div class="form-group fotoUpload mr-3">
                <li>
                <label for="inputImagen"><i class="fas fa-camera align-middle"></i></label>
                <input name="inputImagen" type="file" id="inputImagen" >
              </li>
              </div> <!--cierra el div de subir foto-->
          <div class="form-group videoUpload mr-3">
              <li>
                <label for="inputVideo"><i class="fas fa-video align-middle"></i></label>
                <input name="inputVideo" type="file" id="inputVideo">
              </li>
          </div><!--cierra el div de subir video-->
          <div class="form-group docUpload mr-3">
            <li>
                <label for="inputDoc"><i class="fas fa-paperclip align-middle"></i></label>
                <input name="inputDoc" type="file" id="inputDoc">
            </li>
          </div> <!--cierra el div de subir documento-->
        </ul>
    </div> <!--cierra el div de la lista de botones-->
    <span><?=$mensajesDeError?></span>
  </form>
          </div>
          <div class="modal-footer">
                  <button type="button " class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btnGuardar" value="Enviar">Enviar</button>
          </div> <!--cierra el footer del modal-->
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-11 col-sm-11 col-lg-9 col-xl-9">
    <div class="mensaje">
      <img src="img/man-avatar-2.png" alt=""> <p>Contenido del mensaje</p>
    </div>
    <div class="mensaje">
    <img src="img/man-avatar-2.png" alt=""> <p>Contenido del mensaje</p>
    </div>
    <div class="mensaje">
    <img src="img/man-avatar-2.png" alt=""> <p>Contenido del mensaje</p>
    </div>
    <div class="mensaje">
    <img src="img/man-avatar-2.png" alt=""> <p>Contenido del mensaje</p>
    </div>
    <h4>No hay más mensajes</h4>
  </div>
    </div>



  </main>
@endsection
