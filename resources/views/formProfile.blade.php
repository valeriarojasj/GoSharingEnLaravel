

@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/perfil.css">
@endsection
@section('main')



<div class="container">

<script type="text/javascript" src="/js/profileForm.js"></script>

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





                      <img class="align-self-center avatarImg"  src="/storage/{{Auth::user()->avatar}}" alt=""></label>





                </div>

                <div class="media-body divNomOcup">
                  <h1 class = "textoNombre" id="textoNombre"> {{Auth::user()->first_name }} {{Auth::user()->last_name}}</h1>
                  <h2 id="textoOcupacion">{{$miPerfil->personalTitle??""}}</h2>
                </div>

                </div>



          <h3 class="">Acerca de mí   </h3>

          <div class="caja pt-3">
            <p class="pl-3 pb-3" id="textoAcerca">{{$miPerfil->aboutMe??""}}</p>
          </div>

          <h3 class="">Intereses</h3>

          <div class="caja pt-3">
            <p class="pl-3 pb-3" id="textoIntereses">{{$miPerfil->interest??""}}</p>
          </div>

          <h3 class="">Ubicación Actual</h3>

          <div class="caja pt-3">
            <p class="pl-3 pb-3 text-justify" id="currentCountry">{{$miPerfil->currentCountry??""}}</p>
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
                <div class="modal-body divModalInfoBasica">

                                      <form class='formInfoBasica' method='post' action="/formProfile" enctype="multipart/form-data">
                                        @csrf

                                        <div class="div">

                                            <label for="avatar">Actualizar foto</label>
                                            <div class="">


                                          <input class = "avatarInput" name="image" type="file" id="avatar" >
                                            </div>

                                        </div>
                                        <div class="form-group divPersonalTitle">
                                           <label class="mt-3"for="tituloPersonal">Titulo</label>
                                           <input name="personalTitle" type="text" class="form-control mb-2 " id="tituloPersonal" placeholder='{{$miPerfil->personalTitle??"Ingresa tu titulo o cargo actual"}}'>
                                         </div>

                                         <div class="form-check form-check-inline  divMale">
                                           <input class="form-check-input" type="radio" name="gender" id="hombre" value="Hombre">
                                           <label class="form-check-label" for="Hombre">Hombre</label>
                                         </div>
                                         <div class="form-check form-check-inline divFemale">
                                           <input class="form-check-input" type="radio" name="gender" id="mujer" value="Mujer">
                                           <label class="form-check-label" for="Mujer">Mujer</label>
                                         </div>
                                            <div class="mb-2 divPosteo divAbout">
                                             <label class="mt-3"for="aboutMe">Acerca de mí</label>
                                          <textarea name="aboutMe" class="form-control textoAcerca text-left" rows="6" id="validationTextarea" placeholder='{{$miPerfil->aboutMe??"Escribe un corto resumen sobre tu experiencia y objetivos"}}'></textarea>
                                        </div>

                                        <div class="mb-2 divPosteo divInterests">
                                           <label class="mt-3"for="interest">Intereses</label>
                                           <textarea name="interest" class="form-control textoAcerca text-left" rows="2" id="validationTextarea" placeholder='{{$miPerfil->interest??"Lista tus intereses"}}'></textarea>
                                        </div>    <!--cierra el div del textArea-->

                                        <div class="divPaises">
                                          <label class="mt-3"for="interest">Ubicación Actual</label>
                                          <select class="selectPaises" name="paises">
                                            <option value="">Selecciona tu ubicación actual</option>

                                          </select>



                                        </div>



                  </div> <!--cierra el div del body del modal-->

                  <div class="modal-footer">
                          <button type="button " class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary btnEnviar1" value="Enviar">Guardar Cambios</button>
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
                  <div class="row ">
                  <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12 mt-3 mb-5">
                    <div class="perfil mb-3 ">


                      <div class="Descripcion">
                        <h3 class = "">Experiencia </h3>

                          <button type="submit" name="masExperiencia" class="btn btn-white"><i class="fas fa-plus-circle text-primary"></i> Añadir otra experiencia</button>



                        <div class="caja pt-3">
                          <!-- Aca comienza la seccion de experiencia 1-->



                                                  <!--foreach (experiencias as experiencia) -->
                            <!-- Button trigger modal -->
                            <div class="d-flex justify-content-between">
                              <h5 class="mb-0 ml-3 mt-0 d-inline align-middle"><!-- {{'experienciaposition'}}--></h5>
                          <button type="button" class="btn btn-white d-inline" data-toggle="modal" data-target="#experienciaModal1">
                            <i class="far fa-edit text-primary"></i>
                          </button>
                        </div>






                          <h6 class="mb-0 ml-3 text-left"><!-- {{'experienciaorganization'}}--></h6>
                          <p class="mb-0  ml-3 text-left"><!--{{'experienciacity.experienciacountry'}}--></p>
                          <p class="pb-3 ml-3 text-left"><!--{{'experienciastart_date . experiencia end_date'}}--></p>
                          <p class="pb-3 ml-3 text-left"><!--{{'experiencia description'}}--></p>

                    <!-- endforeach-->

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




</div><!--cierra el div container-->
@endsection
