@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/donaciones.css">
@endsection
@section('main')
  <div class="container-fluid">
  <h1 class="text-center">Encuentra a quién puedes donar los diferentes tipos de artículos</h1>

<div class="row">


  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
    <div class="list-group">
      <button class="btn btnTipoDonaciones rounded-top">Tipos de donaciones</button>
        </div>
    <div class="list-group dropright">
      <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alimentos</button>
        <div class="dropdown-menu jovenes">
          <p class="mb-0">
            <input type="checkbox" class="subOpciones" name="voluntariado" value="ALIM_LP"> Leche en polvo
            <br>
            <input type="checkbox" class="subOpciones" name="voluntariado" value="ALIM_LE"> Leche entera
            <br>
            <input type="checkbox" class="subOpciones" name="voluntariado" value="ALIM_NP"> No perecederos
            <br>
            <input  type="checkbox" class="subOpciones" name="voluntariado" value="ALIM_P"> Perecederos
          </p>
      </div>
    </div>

    <div class="list-group dropright">
      <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Artículos para bebés</button>
        <div class="dropdown-menu mayores">
        <p class="mb-0">
            <input type="checkbox" class="subOpciones" name="voluntariado" value="bebe_panal"> Pañales
            <br>
            <input type="checkbox"class="subOpciones" name="voluntariado" value="bebe_otros"> Otros (Cochecito,cuna, etc.)

          </p>

  </div>
  </div>
  <div class="list-group dropright">
  <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cocina</button>
  <div class="dropdown-menu familia">
    <p class="mb-0">
      <input type="checkbox" class="subOpciones" name="voluntariado" value="Cocina_Art"> Artículos de cocina
      <br>
      <input type="checkbox"  class="subOpciones" name="voluntariado" value="Cocina_Elec"> Electrodomésticos
    </p>

  </div>
</div>
<div class="list-group dropright">
  <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Colchones y frazadas</button>
  <div class="dropdown-menu comedores">
    <p class="mb-0">
      <input type="checkbox" class="subOpciones" name="voluntariado" value="Colchones"> Colchones
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="Frazadas"> Frazadas
      <br>
      <input type="checkbox" class="subOpciones"name="voluntariado" value="Sábanas"> Sábanas
    </p>

  </div>
</div>
<div class="list-group dropright">
  <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Libros</button>
  <div class="dropdown-menu educacion">
  <p class="mb-0">
      <input type="checkbox" class="subOpciones" name="voluntariado" value="Libros_E"> Libros Escolares
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="Libros_IJ"> Infantiles/Juveniles
      <br>
      <input type="checkbox" class="subOpciones"name="voluntariado" value="Libros_O"> Otros
    </p>
</div>
  </div>
  <div class="list-group dropright">
  <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Muebles</button>
  <div class="dropdown-menu salud">
    <p class="mb-0">
      <input type="checkbox" class="subOpciones" name="voluntariado" value="S_adicciones"> Bibliotecas y Armarios
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="S_Enfermedades"> Camas
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="S_Enfermedades"> Mesas y Sillas
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="S_otros"> Otros
    </p>

  </div>
  </div>

<div class="list-group dropright">
  <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recreación</button>
  <div class="dropdown-menu discap">
  <p class="mb-0">
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Rec_Dep"> Articulos deportivos
        <br>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Rec_Mus"> Instrumentos Musicales
        <br>
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Rec_Jug"> Juguetes
        <br>
        <input type="checkbox" class="subOpciones"name="voluntariado" value="Rec_Arte"> Materiales para arte
      </p>
</div>

  </div>
<div class="list-group dropright">
  <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ropa y calzado</button>
  <div class="dropdown-menu indig">
    <p class="mb-0">
      <input type="checkbox" class="subOpciones" name="voluntariado" value="Ropa_bb"> Bebés
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="Ropa_Nino"> Niños
      <br>
      <input type="checkbox" class="subOpciones"name="voluntariado" value="Ropa_Nina"> Niñas
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="Ropa_Muj"> Mujeres
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="Ropa_Hom"> Hombres
      <br>
    </p>
</div>
  </div>
<div class="list-group dropright">
  <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Salud</button>
  <div class="dropdown-menu reinsercion">
  <p class="mb-0">
      <input type="checkbox" class="subOpciones" name="voluntariado" value="S_Med"> Medicinas
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="S_PAux"> Primeros auxilios
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="S_Sang"> Sangre
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="S_0tros"> Otros
    </p>
  </div>
  </div>
<div class="list-group dropright">
  <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tecnología</button>
  <div class="dropdown-menu ambiente">
    <p class="mb-0">
      <input type="checkbox" class="subOpciones" name="voluntariado" value="T_Tab"> Tabletas
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="T_Comp"> Computadoras
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="T_EqS"> Equipos de Sonido
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="T_TelCel"> Telefonos y celulares
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="T_CamV"> Camaras fotográficas y equipos de video
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="T_TV"> TV
      <br>
      <input type="checkbox" class="subOpciones" name="voluntariado" value="T_TV"> Otros
    </p>
  </div>
  </div>
<div class="list-group dropright">
  <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Útiles Escolares</button>
  <div class="dropdown-menu utiles">
  <p class="mb-0">
      <input type="checkbox" class="subOpciones" name="voluntariado" value="UE_Utiles"> Útiles escolares
    </p>
</div>
  </div>

  <div class="list-group dropright">
    <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Higiene y limpieza</button>
    <div class="dropdown-menu higiene">
      <p class="mb-0">
        <input type="checkbox" class="subOpciones" name="voluntariado" value="Hig"> Higiene y limpieza
      </p>
  </div>
    </div>

    <div class="list-group dropright">
      <button type="button" class="opciones list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-b" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Construcción</button>
      <div class="dropdown-menu construccion">
      <p class="mb-0">
          <input type="checkbox" class="subOpciones" name="voluntariado" value="T_CamV"> Materiales de construcción
          <br>
          <input type="checkbox" class="subOpciones"name="voluntariado" value="T_TV"> Pintura
        </p>
    </div>
      </div>
      </div>

  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">

  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-left">Comedor ABCG</h5>
        <p class="card-text text-left">Avenida FTA CABA Buenos Aires</p>

        <a class="card-text text-left" href="tel:12366675"><i class="fas fa-phone-alt icono"><span class=cardTexto> + 54 1234 45 778</span></i></a>
        <br>
        <a class="card-text text-left" href="#"><i class="fas fa-globe-americas icono"><span class=cardTexto> https://www.comedorabcg.org</span></i></a>
        <br>
        <a href="#" class="btn btnFollow cardButton">Seguir</a>
        <a href="#" class="btn btn-secondary cardButton">Articulos requeridos</a>

      </div>
    </div>
  </div>


</div>
</div>
@endsection
