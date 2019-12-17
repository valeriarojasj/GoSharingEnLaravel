@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/amigosStyle.css">
@endsection
@section('main')
  <main>

<script type="text/javascript" src="/js/searchFriend.js"></script>



    <div class="contenedorTodo container-fluid py-2 mb-5">
      <div class="paddingArea">
        <div class="row rowTitulo">
          <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12  TusContactos px-md-2 px-sm-2 px-lg-2 px-xl-2">
            <div class="seccionSaludo media text-center ">
              <div class="cajaSaludo ">
                <div class="divAvatar">
                  <img class="fotoPerfil align-self-center" src="/storage/{{Auth::user()->avatar}}" alt="">
                  <h1 class="saludo align-middle text-wrap  text-center d-lg-inline d-xl-inline d-md-inline d-sm-inline ">Resultado de Busqueda</h1>
                </div>
                <div class="card-body media-body areaTitulo ">

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row rowAmigosInvitaciones">
          <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12 mb-2 colAmigos">
            <div class="paddingCentroA px-md-1 px-sm-1 px-lg-1 px-xl-1">
              <div class="areaContactosTitulo">
                <div class="contactosTitulo">
                  <h6 class="tituloSeccion">Resultados de Busqueda</h6>
                </div>
              </div>

              <div class="row  card-group">
                @forelse($results as $result)

              <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 colAmigoIzq  ">


                  <div class="row ">


                    <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 card-img-left areaFoto px-2 px-md-0 px-sm-0 px-lg-0  px-xl-0 media">
                      <img src="/storage/{{$result->avatar}}" alt="foto Perfil" class="align-self-center card-img img-fluid max-width:100% height:auto ">
                    </div>
                    <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 col-12 areaTextoAmigo px-md-2 px-sm-2 px-lg-2 px-xl-2    card-body media-body">
                      <!--<button class="btn btnAddFriend" id=$noAmigo->id}} type="button">
                          <i class=" iconosAcciones fas fa-user-plus">      </i>
                        </button>-->
                         @if(Auth::user()->allFriends()->contains($result))
                        <a  href="mailto:{{$result->email}} ?"><i class="fas fa-comment-dots"></i></a>
                        <a class= 'btnRemoveFriend' id={{$result->id}} href="#"><i class="fas fa-user-times"></i></a>
                        <span class="borrar"></span>



                        @elseif(Auth::user()->requestsOfThisUser()->get()->contains($result))

                          <span class = "solicitudText">Solicitud Enviada</span>

                       @elseif(Auth::user()->invitationsOfThisUser()->get()->contains($result))

                          <a href="#" id={{$result->id}} class= "btnAcceptFriend"><i class="fas fa-user-check"></i></a>
                          <span class ="invitacion"></span>
                          <a href="#" ><i class="fas fa-user-times"></i></a>
                      @else

                        <a class= 'btnAddFriend' id={{$result->id}} href=""><i class="fas fa-user-plus "></i> </a>
                        <span class="solicitud"></span>
                        @endif






                        <!--endif-->


                        <h4>{{$result->first_name}} {{$result->last_name}}</h4>
                        <p class="text-left">{{$result->profile->personalTitle??""}}</p>
                      </div>


                    </div>


                </div>
              @empty
                <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 colAmigoIzq  ">


                    <div class="row ">


                      <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 card-img-left areaFoto px-2 px-md-0 px-sm-0 px-lg-0  px-xl-0 media">
                        <img src="/images/avatar-man.png" alt="foto Perfil" class="align-self-center card-img img-fluid max-width:100% height:auto ">
                      </div>
                      <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 col-12 areaTextoAmigo px-md-2 px-sm-2 px-lg-2 px-xl-2    card-body media-body">
                        <!--<button class="btn btnAddFriend" id=$noAmigo->id}} type="button">
                            <i class=" iconosAcciones fas fa-user-plus">      </i>
                          </button>-->



                          <span class="solicitud"></span>
                          <h4>No se encontraron resultados que coincidan con tu busqueda</h4>

                        </div>


                      </div>


                  </div>

              @endforelse

              </div>

            </div>
          </div><!-- aca termina la seccion de contactos-->


        </div> <!-- cierra fila de contactos e invitaciones-->
      </div> <!-- cierra paddingArea-->
      </div>  <!-- cierra container-->
              </main>
              @endsection
