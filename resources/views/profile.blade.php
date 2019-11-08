@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/perfil.css">
@endsection
@section('main')
  <div class="container">


          <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">
          <div class="perfil">
              <div class="media avatarYtexto">
                <div class="divAvatar">
                <img class="align-self-center" src=<?=$avatar?> alt="">
                </div>

                <div class="media-body divNomOcup">
                  <h1 class = "textoNombre" id="textoNombre"><?=$nombre . " " .$apellido ?></h1>
                  <h2 id="textoOcupacion">Estudiante</h2>
                </div>
                </div>
              </div>

        </div>
        </div>
        <section>


          <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">
          <div class="Descripcion divAcercaDeMi">
            <h3 class="">Acerca de mí   </h3>

            <div class="caja pt-3">
              <p class="experiencia pl-3 pb-3" id="textoAcerca">Soy Licenciada en Trabajo Social y Licenciada en Psicología.
                He liderado y gestionado proyectos sociales por mas de 8 años.
                Poseo experiencia en el Desarrollo, implementación y seguimiento de Proyectos Sociales y RSE
                y trabajando con diferentes entidades gubernamentales.
                Tengo un excelente manejo de las relaciones interpersonales, soy proactiva y recursiva.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">

          <div class="Descripcion divIntereses">
            <h3 class = "">Intereses   </h3>

            <div class="caja pt-3">
              <p class="experiencia pl-3 pb-3" id="textoIntereses">
              Me gusta trabajar con niños y ancianos.
              </p>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">

          <div class="Descripcion">
            <h3 class = "">Experiencia </h3>

            <div class="caja pt-3">
              <h5 class="mb-0 ml-3">Directora</h5>
              <h6 class="mb-0 ml-3">Fundacion para la niñez ABGS</h6>
              <p class="experiencia mb-0  ml-3">Lima, Peru</p>
              <p class="experiencia pb-3 ml-3">Jun 2018 - Abr 2019</p>


                <h5 class="mb-0 ml-3">Coordinadora de Area de Voluntariado</h5>
                <h6 class="mb-0 ml-3">Fundacion de niños GXTZ</h6>
                <p class="experiencia mb-0  ml-3">Buenos Aires, Argentina</p>
                <p class="experiencia pb-3 ml-3">Feb 2011 - May 2018</p>

          </div>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">
          <div class="Descripcion divHabilidades">
          <h3 class = "">Habilidades  </h3>
            <form class="habilidades" action="" method="post">
              <div class="form-row">


              <label for="habilidades"></label>

      <p class="ml-3 mb-1 pHabilidades">  <input type="checkbox" class="" name="habilidades" value="ing"> Inglés</p>
      <p class="ml-3 mb-1 pHabilidades">   <input type="checkbox" name="habilidades" value="can"> Cantar</p>
      <p class="ml-3 mb-1 pHabilidades">   <input type="checkbox" name="habilidades" value="gui"> Tocar Guitarra </p>
      <p class="ml-3 mb-1 pHabilidades">   <input type="checkbox" name="habilidades" value="cul"> Culinaria </p>
      <p class="ml-3 mb-1 pHabilidades">   <input type="checkbox" name="habilidades" value="con"> Contabilidad </p>
      <p class="ml-3 mb-1 pHabilidades">  <input type="checkbox" name="habilidades" value="rh"> Recursos Humanos </p>
      <p class="ml-3 mb-1 pHabilidades"> <input type="checkbox" name="habilidades" value="ts"> Trabajo Social </p>
      <p class="ml-3 mb-1 pHabilidades"> <input type="checkbox" name="habilidades" value="fut"> Futbol </p>
      <p class="ml-3 mb-1 pHabilidades"> <input type="checkbox" name="habilidades" value="vol"> Volleyball </p>
      <p class="ml-3 mb-1 pHabilidades">  <input type="checkbox" name="habilidades" value="ten"> Tenis </p>
      <p class="ml-3 mb-1 pHabilidades">   <input type="checkbox" name="habilidades" value="mat"> Matematicas </p>
      <p class="ml-3 mb-1 pHabilidades">   <input type="checkbox" name="habilidades" value="psi"> Psicologia </p>
      <p class="ml-3 mb-1 pHabilidades">  <input type="checkbox" name="habilidades" value="pri"> Primeros Auxilios </p>
      <p class="ml-3 mb-1 pHabilidades">  <input type="checkbox" name="habilidades" value="enf"> Enfermeria </p>
      <p class="ml-3 mb-1 pHabilidades"> <input type="checkbox" name="habilidades" value="cns"> Construcción </p>
      <p class="ml-3 mb-1 pHabilidades">  <input type="checkbox" name="habilidades" value="tyc"> Tejido y costura </p>
      <p class="ml-3 mb-1 pHabilidades">  <input type="checkbox" name="habilidades" value="nut"> Nutrición </p>
      <p class="ml-3 mb-1 pHabilidades"> <input type="checkbox" name="habilidades" value="mkt"> Marketing </p>
      <p class="ml-3 mb-1 pHabilidades">  <input type="checkbox" name="habilidades" value="rs"> Redes sociales </p>
      <p class="ml-3 mb-1 pHabilidades">  <input type="checkbox" name="habilidades" value="pr"> Relaciones Publicas y Comunicación </p>
      <p class="ml-3 mb-1 pHabilidades">   <input type="checkbox" name="habilidades" value="rg"> Relaciones Gubernamentales </p>
      <p class="ml-3 mb-1 pHabilidades">   <input type="checkbox" name="habilidades" value="fin"> Finanzas </p>
      <p class="ml-3 mb-1 pHabilidades">  <input type="checkbox" name="habilidades" value="log"> Logistica </p>
      <p class="ml-3 mb-1 pHabilidades">  <input type="checkbox" name="habilidades" value="oe"> Organizacion de Eventos </p>
      <p class="ml-3 mb-1 pHabilidades">  <input type="checkbox" name="habilidades" value="ot"> Otros </p>

          </div>
            <button class="btn botonAgregar" type="submit" name="button">Agregar</button>
            </form>

          </div>
        </div>
        </div>


        </section>




  </div>
@endsection
