<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Arte Para La Paz</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body background="#fff">

    <!--barra de navegacion-->
    <nav id="menu" class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <a href="#" class="navbar-brand">¡Ar<strong>te</strong> Para La P<strong>az!</strong></a>
      <button type="button" class="navbar-toggler" data-toggler="collapse" data-target="#navegacion">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navegacion">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="#" class="nav-link active">Inicio</a></li>
          <li class="nav-item"><a href="arte.php" class="nav-link">¿Comó ha influido en la paz?</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Sobre mi</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Deja tu opinion</a></li>
        </ul>
      </div>
    </nav>

  <!-- IDEA: slider -->
  <div id="idslider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#idslider" data-slide-to="0" class="active"></li>
      <li data-target="#idslider" data-slide-to="1"></li>
      <li data-target="#idslider" data-slide-to="2"></li>
      <li data-target="#idslider" data-slide-to="3"></li>
      <li data-target="#idslider" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 img-responsive" src="./img/1.jpg" alt="Slider 1">
        <div class="carousel-caption hidden-xs-up">
          <div class="px-5 pb-5">
            <h3>Este es el slide 1</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100 img-responsive" src="./img/2.jpg" alt="Slider 2">
        <div class="carousel-caption hidden-sm-down">
          <div class="px-5 pb-5">
            <h3>Este es el slide 2</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100 img-responsive" src="./img/3.jpg" alt="Slider 3">
        <div class="carousel-caption hidden-sm-down">
          <div class="px-5 pb-5">
            <h3>Este es el slide 3</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100 img-responsive" src="./img/4.jpg" alt="Slider 4">
        <div class="carousel-caption hidden-sm-down">
          <div class="px-5 pb-5">
            <h3>Este es el slide 4</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100 img-responsive" src="./img/5.jpg" alt="Slider 5">
        <div class="carousel-caption hidden-sm-down">
          <div class="px-5 pb-5">
            <h3>Este es el slide 5</h3>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>

    </div>

    <a class="carousel-control-prev" href="#idslider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#idslider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


<!-- IDEA: class="container jumbotron w-100 h-100  bg-dark text-white" -->

<div class="container-fluid">
  <div class="row">
    <div class="opa col-md-6 bg-dark">
      <div class="container jumbotron w-100 bg-dark text-white">
        <h1 class="py-5">Aquí Más Texto...</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="opa row h-50 bg-white">
        <img width="100%" height="100%" src="./img/6.jpg" alt="imagen 6">
      </div>
      <div class="opa row h-50 bg-danger">
        <img width="100%" height="100%" src="./img/7.jpg" alt="imagen 7">
      </div>
    </div>
  </div>
  <div class="row text-white imgmod" style="background: #000;">
      <img height="80%" class="d-block w-100 img-responsive imgmody" src="./img/8.jpg" alt="imagen 8">
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="opa row h-50 bg-white">
        <img width="100%" height="100%" src="./img/9.jpg" alt="imagen 6">
      </div>
      <div class="opa row h-50 bg-danger">
        <img width="100%" height="100%" src="./img/10.jpg" alt="imagen 7">
      </div>
    </div>
    <div class="opa col-md-6 bg-dark">
      <div class="container jumbotron w-100 bg-dark text-white">
        <h1 class="py-5">Aun Más Texto...!!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
  </div>
</div>

<footer class="page-footer font-small footercc pt-1">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <hr class="clearfix w-100 d-md-none pb-3">
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2019 Creado por <cite>(Dejo esto para poner su nombre)</cite>
  </div>
</footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="programa.js"></script>
  </body>
</html>
