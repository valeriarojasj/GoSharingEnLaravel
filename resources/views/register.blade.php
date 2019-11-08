@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/style.css">
@endsection
@section('main')
  <div class="container">

        <form method='post' action='registro.php' enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-10 col-10  mx-auto fondoFormulario">
              <div class="form-group">
                <h2 class="tituloRegistro">Regístrate ahora!</h2>

                <label for="name" class="camposForm">Nombre</label>
                <input name="name" type="text" class="form-control" id="inputName"  placeholder="Tu nombre" value="<?=$nombre?>">
                <small id="nombreHelp" class="form-text errores text-white"><?=$arrayError["nombre"]?></small>
              </div>
              <div class="form-group">
                <label for="lastName" class="camposForm">Apellido</label>
                <input name="lastName" type="text" class="form-control" id="inputLastName"  placeholder="Tu apellido" value="<?=$apellido?>">
                <small id="apellidoHelp" class="form-text errores text-white"><?=$arrayError["apellido"]?></small>
              </div>
              <div class="form-group">
                <label for="email" class="camposForm">Email</label>
                <input name="email" type="email" class="form-control" id="inputEmail1"  placeholder="user@example.com" value="<?=$email?>">
                <small id="emaildHelp" class="form-text errores text-white"><?=$arrayError["email"]?></small>
              </div>
              <div class="form-group">
                <label for="password" class="camposForm">Contraseña</label>
                <input  name="password" type="password" class="form-control" id="inputPassword1" placeholder="Tu contraseña" aria-describedby="emailHelp" value="" required>
                <small id="passwordHelp" class="form-text errores text-white"><?=$arrayError["password"]?></small>
              </div>
              <div class="form-group">
                <label for="confirm" class="camposForm">Confirmar Contraseña</label>
                <input name="confirm" type="password" class="form-control" id="exampleInputPassword1" placeholder="Escribe nuevamente tu contraseña" value="" aria-describedby="emailHelp" required>
                <small id="confirmHelp" class="form-text errores text-white"><?=$arrayError["confirm"]?></small>

              </div>
              <div class="form-group">
                <input name="avatar" type="file" id="archivo" aria-describedby="archivoHelp">
                <small id="archivoHelp" class="form-text errores text-white"><?=$arrayError["archivo"]?></small>
              </div>
              <div class="form-group form-check">
                <input name="recordar" type="checkbox" class="form-check-input" id="check1">
                <label class="form-check-label" for="check1">Recordar mi usuario y contraseña</label>
              </div>
              <button type="submit" class="btn btn-blanco">Registrarme</button>
            </div>
          </div>
        </form>
      </div>
@endsection
