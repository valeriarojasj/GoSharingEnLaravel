@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/voluntariado.css">
@endsection
@section('main')
  <div class="container-fluid">


  <div class="row">

  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">


  <h1 class="h1" id="tituloVoluntariado">¿En donde puedo ayudar?</h1>



  </div>
  </div>
  <div class="row">



    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
      <div class="list-group dropright">
        <button type="button" class="btn verdeHeader">Quiero ayudar a:</button>
          </div>
      <div class="list-group dropright">
        <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle opciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Niños y Adolescentes</button>
          <div class="dropdown-menu jovenes">
            <p>
              <input type="checkbox" class="subOpciones" name="voluntariado" value="NJ_0-3"> 0 a 3 años
              <br>
              <input type="checkbox" class="subOpciones" name="voluntariado" value="NJ_4-6"> 4 a 6 años
              <br>
              <input type="checkbox" class="subOpciones" name="voluntariado" value="NJ_7-12"> 7 a 12 años
              <br>
              <input type="checkbox" class="subOpciones" name="voluntariado" value="NJ_13-17"> 13 a 17 años
            </p>
        </div>
      </div>

      <div class="list-group dropright">
        <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle opciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Personas mayores</button>
          <div class="dropdown-menu mayores">
            <p>
        <input type="checkbox" class="subOpciones"name="voluntariado" value="May_mayores"> Personas Mayores


      </p>

    </div>
    </div>
    <div class="list-group dropright">
    <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle opciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Familia</button>
    <div class="dropdown-menu familia">
      <p>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Fam_AS"> Asistencia Social
        <br>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Fam_Vivienda"> Vivienda
      </p>

    </div>
  </div>
  <div class="list-group dropright">
    <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle opciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comedores</button>
    <div class="dropdown-menu comedores">
      <p>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Comedores_Ninos"> Niños
        <br>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Comedores_Adultos"> Adultos
      </p>

    </div>
  </div>
  <div class="list-group dropright">
    <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle opciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Educación</button>
    <div class="dropdown-menu educacion">
      <p>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Edu_AE"> Apoyo Escolar
        <br>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Edu_talleres"> Talleres
        <br>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Edu_cursos"> Cursos
      </p>
  </div>
    </div>
    <div class="list-group dropright">
    <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle opciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Salud</button>
    <div class="dropdown-menu salud">
      <p>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="S_adicciones"> Adicciones
        <br>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="S_Enfermedades"> Enfermedades
        <br>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="S_otros"> Otros
      </p>

    </div>
    </div>

  <div class="list-group dropright">
    <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle opciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Personas con Discapacidad</button>
    <div class="dropdown-menu discap">
      <p>
          <input type="checkbox" class="subOpciones" name="voluntariado" value=" Disc_Ninos"> Niños
          <br>
          <input type="checkbox" class="subOpciones" name="voluntariado" value="Disc_Adultos"> Adultos
        </p>
  </div>

    </div>
  <div class="list-group dropright">
    <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle opciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Indigencia</button>
    <div class="dropdown-menu indig">
      <p>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Ind_Indigencia"> Indigencia
      </p>
  </div>
    </div>
  <div class="list-group dropright">
    <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle opciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reinserción Social</button>
    <div class="dropdown-menu reinsercion">
      <p>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="RI carceles"> Cárceles
        <br>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="RO otros"> Otros
      </p>
    </div>
    </div>
  <div class="list-group dropright">
    <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle opciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Medio Ambiente</button>
    <div class="dropdown-menu ambiente">
      <p>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Medio_Ambiente"> Medio Ambiente
      </p>
    </div>
    </div>
  <div class="list-group dropright">
    <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle opciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Animales</button>
    <div class="dropdown-menu animales">
      <p>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Animales"> Animales
      </p>
  </div>
    </div>
    </div>
      <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
        </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
      <div class="buscador mb-3">
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar en mi zona" aria-label="Search">
            <button class="btn btn-primary my-2 my-sm-0 verdeHeader" type="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>

      <div class="embed-responsive embed-responsive-1by1">

    <iframe class = "embed-responsive-item " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.7614881508416!2d-58.39716428459162!3d-34.610192265348026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac148b8d1a1%3A0x4959224ff35a0c72!2sTecho%20Buenos%20Aires!5e0!3m2!1sen!2sar!4v1568343718054!5m2!1sen!2sar" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
  </div>
@endsection
