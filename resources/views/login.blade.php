@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/login.css">
@endsection
@section('main')
  <main>


         <form method='post' class='theForm' action=>
           @csrf
           <div class="row">
             <div class="col-lg-6 col-xl-6 col-md-6 col-sm-10 col-11  mx-auto fondoFormulario">
               <div class="form-group">
                 <h2 class="tituloLogin">Te damos la bienvenida! Inicia tu sesión</h2>
                 <label for="email" class="camposForm">Email</label>
                 <input name="email" type="email" class="form-control" placeholder="Tu email" value="{{$email}}" required>
                 <small id="email" class="form-text text-white"><?=$errores["email"] ?? ''?></small>
               </div>
               <div class="form-group">
                 <label for="inputPassword1" class="camposForm">Contraseña</label>
                 <input  name="password" type="password" class="form-control" id="inputPassword1" placeholder="Tu contraseña" value="<?=$password?>" required>
                 <small id="passwordHelp" class="form-text text-white"><?=$errores["password"] ?? ''?></small>
               </div>
               <div class="form-group form-check">
                 <input name="mantenermeLogeado" type="checkbox" class="form-check-input" id="check1">
                 <label class="form-check-label" for="check1">Mantenerme logueado</label>
               </div>
               <a class=colorBlanco href="olvidePassword.php">¿Olvidó su contraseña?</a>
               <button type="submit" class="btn btn-primary botonIngresar">Ingresar</button>
             </div>
           </div>
         </form>


  </main>
@endsection
