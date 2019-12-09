@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/amigosStyle.css">
@endsection
@section('main')
  <main>

@php

@endphp


    <div class="contenedorTodo container-fluid py-2 mb-5">
      <div class="paddingArea">
        <div class="row rowTitulo">
          <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12  TusContactos px-md-2 px-sm-2 px-lg-2 px-xl-2">
            <div class="seccionSaludo media text-center ">
              <div class="cajaSaludo ">
                <div class="divAvatar">
                  <img class="fotoPerfil align-self-center" src="/storage/{{Auth::user()->avatar}}" alt="">
                  <h1 class="saludo align-middle text-wrap  text-center d-lg-inline d-xl-inline d-md-inline d-sm-inline ">Agrega nuevos amigos</h1>
                </div>
                <div class="card-body media-body areaTitulo ">

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row rowAmigosInvitaciones">
          <div class="col-md-9 col-sm-9 col-lg-9 col-xl-9 col-12 mb-2 colAmigos">
            <div class="paddingCentroA px-md-1 px-sm-1 px-lg-1 px-xl-1">
              <div class="areaContactosTitulo">
                <div class="contactosTitulo">
                  <h6 class="tituloSeccion">Sugerencias de amistad</h6>
                </div>
              </div>

              <div class="row rowParAmigos card-group">

                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 colAmigoIzq  ">
                    <div class="row rowAmigoIzq">
                      <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 card-img-left areaFoto px-2 px-md-0 px-sm-0 px-lg-0  px-xl-0 media">
                        <img src="/images/man-1-500px.jpg" alt="foto Perfil" class="align-self-center card-img img-fluid max-width:100% height:auto ">
                      </div>
                      <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 col-12 areaTextoAmigo px-md-2 px-sm-2 px-lg-2 px-xl-2    card-body media-body">
                        <a href="mailto:pedro@perez.com?"><i class="fas fa-user-plus"></i></a>
                        <h4>Pedro Pérez</h4>
                        <p class="text-left">Estudiante Digital House</p>
                      </div>
                    </div>
                  </div>

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 colAmigoDer ">
                  <div class="row rowAmigoDer">
                    <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 card-img-left areaFoto px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0  media">
                      <img src="/images/woman-1-500px.jpg" alt="foto Perfil" class="align-self-center card-img img-fluid max-width:100% height:auto ">
                    </div>
                    <div class="col-md-8  col-sm-8 col-lg-8 col-xl-8 areaTextoAmigo px-md-2 px-sm-2 px-lg-2 px-xl-2  card-body media-body">
                      <a href="mailto:maria@garcia.com?"><i class="fas fa-user-plus"></i></a>
                      <h4>María García</h4>
                      <p class="text-left">Diseñadora Gráfica</p>
                    </div>
                  </div>
                </div>


                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 colAmigoIzq  ">
                    <div class="row rowAmigoIzq">
                      <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 card-img-left areaFoto px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                        <img src="/images/man-2-500px.jpg" alt="foto Perfil" class="align-self-center  card-img img-fluid max-width:100% height:auto">
                      </div>
                      <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 areaTextoAmigo px-md-2 px-sm-2 px-lg-2 px-xl-2    card-body media-body">
                        <a href="mailto:felipe@alvarez.com?"><i class="fas fa-user-plus"></i></a>
                        <h4>Felipe Álvarez</h4>
                        <p class="text-left">Estudiante de Derecho</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 colAmigoDer ">
                    <div class="row rowAmigoDer">
                      <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 card-img-left areaFoto px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                        <img src="/images/woman-2-500px.jpg" alt="foto Perfil" class="align-self-center  card-img img-fluid max-width:100% height:auto">
                      </div>
                      <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 areaTextoAmigo px-md-2 px-sm-2 px-lg-2 px-xl-2    card-body media-body">
                        <a href="mailto:isabel@gomez.com?"><i class="fas fa-user-plus"></i></a>
                        <h4>Isabel Gómez</h4>
                        <p class="text-left">Trabajadora Social</p>
                      </div>
                    </div>
                  </div>



                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6   colAmigoIzq ">
                    <div class="row rowAmigoIzq">
                      <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 card-img-left areaFoto px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                        <img src="/images/man-3-500px.jpg" alt="foto Perfil" class="align-self-center  card-img img-fluid max-width:100% height:auto">
                      </div>
                      <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 areaTextoAmigo px-md-2 px-sm-2 px-lg-2 px-xl-2    card-body media-body">
                        <a href="mailto:andres@estrada.com?"><i class="fas fa-user-plus"></i></a>
                        <h4>Andrés Estrada</h4>
                        <p class="text-left">Profesor de Ingles</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 colAmigoDer ">
                    <div class="row rowAmigoDer">
                      <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 card-img-left areaFoto px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                        <img src="/images/woman-3-500px.jpg" alt="foto Perfil" class="align-self-center  card-img img-fluid max-width:100% height:auto">
                      </div>
                      <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 areaTextoAmigo px-md-2 px-sm-2 px-lg-2 px-xl-2    card-body media-body">
                        <a href="mailto:susana@florez.com?"><i class="fas fa-user-plus"></i></a>
                        <h4>Susana Flórez</h4>
                        <p class="text-left">Estudiante de Psicologia</p>
                      </div>
                    </div>
                  </div>

                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 colAmigoIzq  ">
                      <div class="row rowAmigoIzq">
                        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 card-img-left areaFoto px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                          <img src="/images/man-4-500px.jpg" alt="foto Perfil" class="align-self-center  card-img img-fluid max-width:100% height:auto">
                        </div>
                        <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 areaTextoAmigo px-md-2 px-sm-2 px-lg-2 px-xl-2  card-body media-body">
                          <a href="mailto:camilo@muñoz.com?"><i class="fas fa-user-plus"></i></a>
                          <h4>Camilo Muñóz</h4>
                          <p class="text-left">Ingeniero Civil</p>
                        </div>
                      </div>
                    </div>

                  </div><!-- aca termina un par de contactos-->
                </div> <!-- aca termina la seccion de contactos-->
              </div>

            <!-- aca comienza la seccion de invitaciones-->



            <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 seccionInvitaciones">
              <div class="paddingCentroB px-md-1 px-sm-1 px-lg-1 px-xl-1">
              <div class="invitacionesTitulo mt-md-0 px-sm-0 px-lg-0 px-xl-0">
                <h6 class="tituloSeccion" id="titulo2">Mis Invitaciones (3)</h6>
              </div>

                <!-- aca comienza una invitacion-->
                <div class="row rowInvitacion ">
                  <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 card colTarjetaAmigo">

                  <div class="row rowAmigo">

                    <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 areaFoto px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0  card-img-left  media">
                      <img src="/images/avatar-man.png" alt="foto Perfil" class="align-self-center fotoInv  card-img img-fluid max-width:100% height:auto">
                  </div>

                  <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 colTextoAmigo px-md-2 px-sm-2 px-lg-2 px-xl-2    card-body media-body">
                  <a href="#"><i class="fas fa-user-check"></i></a>
                  <a href="#"><i class="fas fa-user-times"></i></a>
                    <h4>Juan Álvarez</h4>
                      <p class="text-left">Psicologo</p>
                  </div>

                </div>

              </div>

            </div>   <!-- aca termina una invitacion-->

            <!-- aca comienza una invitacion-->
          <div class="row rowInvitacion">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 colTarjetaAmigo card">

            <div class="row rowAmigo">

              <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 areaFoto px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0  card-img-left  media">
                  <img src="/images/avatar-man.png" alt="foto Perfil" class="align-self-center fotoInv card-img img-fluid max-width:100% height:auto">
              </div>

              <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 colTextoAmigo px-md-2 px-sm-2 px-lg-2 px-xl-2   card-body media-body">
                <a href="#"><i class="fas fa-user-check"></i></a>
                <a href="#"><i class="fas fa-user-times"></i></a>

                <h4>Juan David Perez</h4>
                  <p class="text-left">Medico</p>
              </div>

            </div>

          </div>

        </div>   <!-- aca termina una invitacion-->
        <!-- aca comienza una invitacion-->
      <div class="row rowInvitacion ">

        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 colTarjetaAmigo card">

        <div class="row rowAmigo">

          <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 areaFoto px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0  card-img-left  media">
              <img src="/images/avatar-man.png" alt="foto Perfil" class="align-self-center  fotoInv  card-img img-fluid max-width:100% height:auto">
          </div>

          <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 colTextoAmigo px-md-2 px-sm-2 px-lg-2 px-xl-2    card-body media-body">
            <a href="#"><i class="fas fa-user-check"></i></a>
            <a href="#"><i class="fas fa-user-times"></i></a>

            <h4>Laura Sierra</h4>
              <p class="text-left">Periodista</p>
          </div>





    </div>   <!-- aca cierra un rowAmigo-->



  </div><!-- aca cierra un colTarjetaAmigo-->
</div><!-- cierra un rowInvitacion-->
</div><!-- cierra div paddingCentroB-->
  </div> <!-- cierra columna de invitaciones-->
</div><!-- cierra fila de contactos e invitaciones-->

</div>
  </div>
   <!-- cierra filaTodo-->
<!-- cierra container-->
</main>
@endsection
