

@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/perfil.css">
@endsection
@section('main')



<div class="container">


      <section>    <!-- Aca comienza la seccion de informacion personal -->
        <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">
          <div class="perfil">
            <!-- Button trigger modal -->
            <div class="text-right">
            <button type="button" class="btn btn-white " data-toggle="modal" data-target="#infoPersonalModal">
              <i class="far fa-edit text-primary"></i>
            </button>
            </div>
            <div class="Descripcion divAcercaDeMi">
            <div class="media avatarYtexto">



                <div class="divAvatar">
                  <form class="" action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <button type="button" name="button" class="botonAvatar">
                      <img class="align-self-center" src="/storage/{{Auth::user()->avatar}}" alt="">
                    </button>

                  </form>
                </div>

                <div class="media-body divNomOcup">
                  <h1 class = "textoNombre" id="textoNombre"> {{Auth::user()->first_name }} {{Auth::user()->last_name}}</h1>
                  <h2 id="textoOcupacion">{{$miPerfil->personalTitle??""}}</h2>
                </div>

                </div>



          <h3 class="">Acerca de mí   </h3>

          <div class="caja pt-3">
            <p class="pl-3 pb-3" id="textoAcerca">{{$newProfile->aboutMe?? ""}}</p>
          </div>



          <!-- Modal -->
          <div class="modal fade" id="infoPersonalModal" tabindex="-1" role="dialog" aria-labelledby="infoPersonalModalLabel" aria-hidden="true">


            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="infoPersonalModalLabel">Informacion Personal</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                                      <form method='post' action="/formProfile" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group ">
                                           <label class="mt-3"for="tituloPersonal">Titulo</label>
                                           <input name="personalTitle" type="text" class="form-control mb-2 " id="tituloPersonal" placeholder="Ingresa tu titulo o cargo actual">
                                         </div>

                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" type="radio" name="gender" id="hombre" value="Hombre">
                                           <label class="form-check-label" for="Hombre">Hombre</label>
                                         </div>
                                         <div class="form-check form-check-inline">
                                           <input class="form-check-input" type="radio" name="gender" id="mujer" value="Mujer">
                                           <label class="form-check-label" for="Mujer">Mujer</label>
                                         </div>
  <div class="mb-2 divPosteo">
     <label class="mt-3"for="aboutMe">Acerca de mí</label>
  <textarea name="aboutMe" class="form-control textoAcerca text-left" rows="6" id="validationTextarea" placeholder="Escribe un corto resumen sobre tu experiencia, intereses y objetivos"></textarea>
  </div>     <!--cierra el div del textArea-->



                  </div> <!--cierra el div del body del modal-->

                  <div class="modal-footer">
                          <button type="button " class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary" value="Enviar">Guardar Cambios</button>
                  </div> <!--cierra el footer del modal-->
                </form><!--cierra el form de Informacion Personal-->
                </div>

              </div>
            </div>
          </div>
          </div>
            </div>
              </div>
              </section>

                <section>   <!-- Aca comienza la seccion de experiencia -->
                  <div class="row">
                  <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12 mt-3">
                    <div class="perfil">


                      <div class="Descripcion">
                        <h3 class = "">Experiencia </h3>

                          <button type="submit" name="masExperiencia" class="btn btn-white"><i class="fas fa-plus-circle text-primary"></i> Añadir otra experiencia</button>



                        <div class="caja pt-3">
                          <!-- Aca comienza la seccion de experiencia 1-->



                            <!-- Button trigger modal -->
                            <div class="d-flex justify-content-between">
                              <h5 class="mb-0 ml-3 mt-0 d-inline align-middle">MI cargo</h5>
                          <button type="button" class="btn btn-white d-inline" data-toggle="modal" data-target="#experienciaModal1">
                            <i class="far fa-edit text-primary"></i>
                          </button>
                        </div>



                        <!--  foreach ($experiencias as $experiencia) -->


                          <h6 class="mb-0 ml-3">Experiencia[empresa]</h6>
                          <p class="mb-0  ml-3">Aca ciudad y pais</p>
                          <p class="pb-3 ml-3">
                            Aca la fecha de inicio y de fin</p>
                          <p class="pb-3 ml-3">Aca la descripcion del cargo</p>


                      </div>

                      <!-- Modal experiencia 1-->




                      <div class="modal fade" id="experienciaModal1" tabindex="-1" role="dialog" aria-labelledby="experienciaModalLabel1" aria-hidden="true">


                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="experienciaModalLabel1">Experiencia</h5>

                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">


                                              <form method='post' action="" enctype="multipart/form-data">


                                                    <div class="form-group ">

                                                       <label class="mt-1"for="cargo">Cargo</label>
                                                       <input name="cargo" type="text" class="form-control " id="cargo1" placeholder="Escribe tu cargo">
                                                       <label class="mt-3"for="empresa">Organización/Empresa</label>
                                                     <input name="empresa" type="text" class="form-control" placeholder="Escribe el nombre de la organización o empresa">

                                                 <div class="form-row mt-2">
                                                   <div class="col">
                                                       <label class="" for="fechaInicioExp">Fecha Inicio</label>
                                                     <input name="fechaInicioExp" type="month" class="form-control" placeholder="">
                                                      </div>
                                                     <div class="col">
                                                         <label class="" for="fechaFinExp">Fecha Fin</label>
                                                       <input name="fechaFinExp" type="month" class="form-control" placeholder="">
                                                   </div>
                                                     </div>
                                                     <div class="form-row mt-2">
                                                       <div class="col">
                                                           <label class="" for="ciudadExp">Ciudad</label>
                                                         <input name="ciudadExp" type="text" class="form-control" placeholder="Escribe la ciudad">
                                                          </div>
                                                         <div class="col">
                                                             <label class="" for="paisExp1">País</label>
                                                           <input name="paisExp" type="text" class="form-control" placeholder="Escribe el país">
                                                       </div>
                                                         </div>


                                                     <div class="mb-2 divDescripcionCargo">
                                                        <label class="mt-2"for="descripcionCargo1">Descripción</label>
                                                     <textarea name="descripcionCargo1" class="form-control textoDescripcionCargo" rows="6" id="validationTextarea" placeholder="Escribe un corto resumen sobre tus funciones y logros" required></textarea>
                                                     </div>     <!--cierra el div del textArea-->









                                                      </div>





                              </div> <!--cierra el div del body del modal-->

                              <div class="modal-footer">
                                      <button type="button " class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                      <button type="submit" class="btn btn-primary" value="Enviar">Guardar Cambios</button>
                              </div> <!--cierra el footer del modal-->


</form><!--cierra el form de agregar posteo-->
                            </div>
</div>
</div> <!--cierra el primer modal-->



                        </div>

                      </div>
                                                </div>
                                                </div>


</section>
<section>    <!-- Aca comienza la seccion de Intereses -->


  <div class="row">
  <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">
    <div class="perfil Descripcion divIntereses">
      <!-- Button trigger modal -->
      <div class="text-right">
      <button type="button" class="btn btn-white " data-toggle="modal" data-target="#interesesModal">
        <i class="far fa-edit text-primary"></i>
      </button>
      </div>

                <h3 class="">Intereses</h3>

                <div class="caja pt-3">
                  <p class="pl-3 pb-3" id="textoIntereses">Aca va el texto de interes</p>
                </div>



                <!-- Modal -->
                <div class="modal fade" id="interesesModal" tabindex="-1" role="dialog" aria-labelledby="interesesModalLabel" aria-hidden="true">


                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="intereses">Intereses</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                                            <form method='post' action="" enctype="multipart/form-data">


        <div class="mb-2 divIntereses">
           <label class="mt-3"for="textoIntereses">Intereses</label>
        <textarea name="textoIntereses" class="form-control textoIntereses" rows="6" id="validationTextarea" placeholder="Escribe cuales son tus intereses"></textarea>
        </div>     <!--cierra el div del textArea-->



                        </div> <!--cierra el div del body del modal-->

                        <div class="modal-footer">
                                <button type="button " class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary" value="Enviar">Guardar Cambios</button>
                        </div> <!--cierra el footer del modal-->
                                                </form><!--cierra el form de agregar posteo-->
                      </div><!--cierra el div ModalContent-->

                    </div><!--cierra el div ModalDialog-->
                  </div><!--cierra el div ModalFade-->
                </div><!--cierra el div debajo de col-->
              </div><!--cierra el div col-->
            </div><!--cierra el div row-->

                    </section>



</div><!--cierra el div container-->
@endsection
