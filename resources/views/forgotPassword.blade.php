
@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/homeStyle.css">
@endsection
@section('main')
  <div class="container">
        <h2>En breve te enviaremos un email para renovar tu contraseña</h2>
        <form method='post' action='login.php'>
          <div class="row">
            <div class="col-lg-6 col-xl-6 col-md-6 col-sm-10 col-10  mx-auto fondoFormulario">
              <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" placeholder="Tu email" required>
                <small id="email" class="form-text text-muted"></small>
              </div>

  <a href="#"></a>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </form>
      </div>

@endsection
