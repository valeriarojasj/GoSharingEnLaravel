@extends('layouts/goSharing')
@section('css')
  <link rel="stylesheet" href="/css/FAQ.css">
@endsection
@section('main')

      <main>
        <div class="row">
          <div class="col-lg-6 col-xl-6 col-md-6 mx-auto">

            <div class="accordion conocenos" id="accordionExample">
                 <h1 class="tituloFAQ">Preguntas frecuentes</h1>
              <div class="card">
                <div class="card-header p-1" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      ¿Quiénes somos?
                    </button>
                  </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    Somos el espacio donde todas las actividades sociales convergen. Si te gustaria participar de algun voluntariado o si sos el titular de alguna organización o empresa social, este lugar te ayudará a potenciar tu trabajo!
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header p-1" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      ¿Cómo puedo contactarlos?
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    Podes contactarnos a través del <a href="contactanos.php"> Formulario de contacto </a> o enviando tu inquietudes a sharityx@gmail.com
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header p-1" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      ¿Cómo hago para participar?
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    Para poder participar debes estar registrado, ya seas una persona o una organización.
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header p-1" id="headingFour">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      ¿Tiene algún costo?
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                  <div class="card-body">
                    No! Desde Sharityx deseamos que seamos muchos buscando transformar la realidad, es por ellos que este espacio será siempre gratuito.
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header p-1" id="headingFive">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      ¿Cómo cambio la información de mi perfil?
                    </button>
                  </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                  <div class="card-body">
                    Podes cambiar la información de tu perfil a través de la pestaña "Editar" en la solapa <a href="perfil.php">Perfil </a>.
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header p-1" id="headingSix">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      ¿Cómo cambio mi contraseña?
                    </button>
                  </h2>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                  <div class="card-body">
                    Podes cambiar tu contraseña a través de la pestaña "Cambiar contraseña" en la solapa "Seguridad".
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
@endsection
