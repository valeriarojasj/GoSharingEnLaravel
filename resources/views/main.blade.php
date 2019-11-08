@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/homeStyle.css">
@endsection

@section('main')
<main>
  <div class="container-fluid contenedor">
    <div class="row filas">
      <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 columnas">
        <h1>¡Únete a la comunidad de GoSharing!</h1>
        <div id="carouselExampleCaptions" class="carousel slide  " data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/actividadesVoluntarios1_1250x760.jpg" class="center-block img-fluid fotoActividades" alt="...">
              <div class="carousel-caption areaCaption d-none d-md-block ">
                <h5>Hay muchas formas de participar</h5>
                <p>¿Quieres regalar alegría a quienes mas lo necesitan?</p>
              </div>
            </div>
            <div class="carousel-item ">
              <img src="img/actividadesVoluntarios2_1250x760.jpg" class="center-block img-fluid  fotoActividades" alt="...">
              <div class="carousel-caption areaCaption d-none d-md-block ">
                <h5> y muchos proyectos sociales de donde elegir</h5>
                <p>Quieres ayudar a conservar nuestro planeta?</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/actividades-5.jpg" class="center-block img-fluid  fotoActividades" alt="...">
              <div class="carousel-caption areaCaption d-none d-md-block">
                <h5 class="titulosSlides">Unéte a GoSharing y encuentra proyectos de tu interes y personas que quieren ayudar como tú</h5>
                <p class= "parrafosSlides">Quieres ayudar a otros a cumplir sus sueños?</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection





  
