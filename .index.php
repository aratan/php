<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Disident -En pruebas-</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconecte" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2? familiaPoppins:wght@200&display-swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link href="css/style.css" rel="stylesheet">
</head>

<?php session_start(); 
session_destroy(); 
?>

<body>
  <main>
    <!-- MENU -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php" _msthash="1454479" _msttexthash="75387">Disident</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation" _msthidden="A" _msthiddenattr="1375426" _mstaria-label="320099">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="productos.php" _msthash="574366" _msttexthash="136006">Noticias</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="index.html" _msthash="574366" _msttexthash="136006">Buscador</a>
      </li>      
      <li class="nav-item">
        <a class="nav-link" href="form.php" _msthash="574743" _msttexthash="95589">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registro.php" _msthash="575120" _msttexthash="110331">Registro</a>
      </li>
  </div>
  
</nav>
    <!-- FIN DE MENU -->
    <!--IMGEN DE FONDO -->
    <div>
	<p>We're on trial./Estamos en pruebas.</p>
    <iframe width="100%" height="315" src="https://3speak.co/embed/live/aratan" frameborder="0"  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

<!--    
      <video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="50">
        <source src="./media/video.mp4" type="video/mp4" />
      </video>
    </div>
    <!--TEXTOS
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <div class="card" style="width:100%">
            <img class="card-img-top" src="./img/pexels-laura-stanley-5644323.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Tom MacDonald</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width:100%">
            <img class="card-img-top" src="./img/pexels-laura-stanley-5644323.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card" style="width:100%">
            <img class="card-img-top" src="./img/pexels-laura-stanley-5644323.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Martinez</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>
-->
    <!-- Footer -->
    <footer class="page-footer font-small btn-outline-white bg-light pt-4">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2021 Copyright:
        <p> HolaLibertad</p>
      </div>
      <!-- Copyright -->

    </footer>
        <!-- Footer -->

  </main>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <sscript src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></sscript>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="./js/main.js" type="module"></script>
</body>

</html>