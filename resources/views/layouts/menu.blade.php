@guest


  <nav class="navbar navbar-expand-lg navbar-light navegacion mb-3">

    <a class="navbar-brand" href="/home"><img src="/images/icon3LU.png"  alt="logoDeRedSocial"><span class="marca">GoSharing</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link tipografiaHeader" href="/about">Conócenos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link tipografiaHeader" href="/faq">Preguntas Frecuentes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link tipografiaHeader" href="/contact">Contáctanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link tipografiaHeader" href="/register">Regístrate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link tipografiaHeader" href="/login">Iniciar Sesión</a>
        </li>
      </ul>
    </div>
  </nav>




@else

<div class="navegacion">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/home"><img src="/images/icon3LU.png" alt="logoDeRedSocial"><span class="marca">GoSharing</span></a>
      <button class="navbar-toggler hamburguesa" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon iconoHamburguesa"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarToggler">
    <ul class="navbar-nav navbar-white  mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="/main"><i class="fas fa-home iconoHeader"><span class="textoIcono"><br>Principal</span></i></a>
        </li>

        <li class="nav-item dropdown nav-item">
              <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="amigos.php" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-friends iconoHeader"><span class="textoIcono"><br>Mis amigos</span></i></a>
            <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right">
              <a class="dropdown-item tipografiaPiola" href="/friends">Ver Mis amigos</a>
              <a class="dropdown-item tipografiaPiola" href="/findFriends">Buscar Contactos</a>
            </div>

        </li>

        <li class="nav-item dropdown nav-item">
              <a class="nav-link   dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-hand-holding-heart iconoHeader"><span class="textoIcono"><br>Quiero ayudar</span></i></a>
            <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right">
              <a class="dropdown-item tipografiaPiola" href="/donations">Doná</a>
              <a class="dropdown-item tipografiaPiola" href="/volunteering">Participá</a>
            </div>

        </li>



  <li class="nav-item dropdown nav-item">
<a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-comments iconoHeader"><span class="textoIcono"><br>Mis mensajes</span></i></a>
<div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right">
<a class="dropdown-item tipografiaPiola" href="/messages">Ver Mis Mensajes</a>
<a class="dropdown-item tipografiaPiola" href="/messages">Enviar Mensaje</a>
<a class="dropdown-item tipografiaPiola" href="#">Notificaciones</a>
</div>
</li>

<li class="nav-item dropdown nav-item<?php if((basename($_SERVER['REQUEST_URI']))=="formPerfil.php"||(basename($_SERVER['REQUEST_URI']))=="miPerfil.php"){echo "active text-warning";}?>">

<a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user iconoHeader"><span class="textoIcono"><br>Mi Perfil</span></i></a>
<div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right ">
<a class="dropdown-item tipografiaPiola" href="/profile">Ver Mi perfil</a>
<a class="dropdown-item tipografiaPiola" href="/formProfile">Editar Mi Perfil</a>
    <a class="dropdown-item tipografiaPiola" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Cerrar Sesión') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

</div>
</li>
<form class="form-inline">

    <input class="form-control mr-sm-2 inputSearchPeople" type="search" placeholder="Buscar Amigos" aria-label="Search">
    <button class="btn btn-warning my-2 my-sm-0 btnSearchPeople" type="submit"><i class="fas fa-search iconoHeader"></i></button>
</form>

  </ul>


</div>
</nav>
</div>
@endguest
