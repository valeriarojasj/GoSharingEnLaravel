@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/contactanos.css">
@endsection
@section('main')
  <main>

    <div class="container formularioContacto">

      <form>
        <div class="row">
          <div class="col-lg-7 col-xl-7 col-md-7 col-sm-11 col-12  mx-auto fondoFormulario">
            <h2 class="tituloContactanos">Ponte en contacto con nosotros!</h2>
            <div class="form-group">
              <label for="formControlInput1" class="camposForm">Nombre</label>
              <input type="text" class="form-control" id="formControlInput1" placeholder="Escribe tu nombre" required>
            </div>
            <div class="form-group">
              <label for="formControlInput2" class="camposForm">Email de contacto</label>
              <input type="email" class="form-control" id="formControlInput2" placeholder="user@example.com" required>
            </div>
            <div class="form-group">
              <label for="formControlSelect1" class="camposForm">Motivo de contacto</label>
              <select class="form-control" id="exampleFormControlSelect1" required placeholder="Selecciona una opción">
                <option>Información general</option>
                <option>Problemas técnicos</option>
                <option>Sugerencias y Comentarios</option>
                <option>Otro</option>
              </select>
            </div>
            <div class="form-group">
              <label for="formControlTextarea1" class="camposForm">Comentarios</label>
              <textarea class="form-control" placeholder="Escribe aqui tus comentarios, preguntas y sugerencias." id="formControlTextarea1" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-blanco">Enviar</button>
          </div>
        </div>
      </form>
  </div>
</main>
@endsection
