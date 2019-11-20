<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>GoSharing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/dd0322cf66.js"></script>
   <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Neucha&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Asap+Condensed|Neucha&display=swap" rel="stylesheet">
  @yield('css')
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">

  </head>
  <body>


<header>



@include('layouts/menu')
</header>

@yield('main')

<footer class= 'fixed-bottom'>
  <div class="divFooter">



        <ul class="nav justify-content-center">
          <li class="nav-item py-0">
            <a class="nav-link py-0" href="/about">Conocenos</a>
          </li>
          <li class="nav-item py-0">
            <a class="nav-link py-0" href="/faq">Preguntas frecuentes</a>
          </li>
          <li class="nav-item py-0">
            <a class="nav-link py-0" href="#">Condiciones</a>
          </li>
          <li class="nav-item py-0">
            <a class="nav-link py-0" href="#">Privacidad</a>
          </li>

</ul>

</div>
<p class="marcaFooter m-0 p-0">GoSharing © 2019.</p>
</footer>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
