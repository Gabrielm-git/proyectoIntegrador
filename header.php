<?php

session_start();
require_once 'controladores/funciones.php';

?>
<!DOCTYPE html>
<html lang="es" dir="ltr" xml:lang="es">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="css/estilo-header.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #dac300!important;">
      <a class="navbar-brand" href="index.php">Trivia</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jugar.php">Jugar!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ranking.php">Ranking</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="FAQ.php">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
<?php if(!isset($_SESSION['email'])): ?>
                 <li class="nav-item">
            <a class="nav-link" href="/logueo.php">Acceder</a>
          </li>
              <li class="nav-item">
            <a class="nav-link" href="/registrarse.php">Registro</a>
          </li>
                <?php endif; ?>
                
<?php if(isset($_SESSION['email'])): ?>
<?php $_SESSION['email'] ?>
<?php  echo '<span style="color:white;">Bienvenido <strong>' . $_SESSION['email'] . '</strong></span> ';  ?>
<a class="btn btn-danger" href="cerrar-sesion.php" role="button">Log out</a>;
                     

                
              <?php endif; ?>


        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Búsqueda" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
        </form>
      </div>
    </nav>
  </header>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>