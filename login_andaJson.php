<?php

session_start();
require_once 'controladores/funciones.php';

$arrayDeErrores = "";

if($_POST) {
    $arrayDeErrores = validarRegistracion($_POST);
    if(count($arrayDeErrores) === 0) {
        // REGISTRO AL USUARIO
        $usuarioFinal = [
            'nombre' => trim($_POST['usuario']),
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
        // ENVIAR A LA BASE DE DATOS $usuarioFinal
        $jsonDeUsuario = json_encode($usuarioFinal);
        file_put_contents('usuarios.json', $jsonDeUsuario . PHP_EOL, FILE_APPEND);
        header("Location: login.php");
        exit;
    }
}


?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Acceder</title>
    <link rel="stylesheet" href="css/estilo-header.css">
    <link rel="stylesheet" href="css/estilo-login.css">
    <link rel="stylesheet" href="css/estilo-footer.css">
    <link rel="stylesheet" href="Java.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body style="background-image: url(../img/Background.jpg)">
    <?php include("header.php") ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
      <h1 class="text-white">Acceder</h1>
    </nav>
    <form class=""  method="post">
    <div class="jumbotron jumbotron-fluid" style="background-image: url(../img/Background.jpg); margin: 0;">
      <div class="container">
        <div class="login-wrap">
    	<div class="login-html">
    		<input id="tab-1" type="radio" name="tab" class="sign-in" value="log.php" checked><label for="tab-1" class="tab" style="cursor: pointer";>Ingresar</label>
    		<input id="tab-2" type="radio" name="tab" class="sign-up" value="alta.php"><label for="tab-2" class="tab" style="cursor: pointer";>Registrarme</label>
    		<div class="login-form">
    			<div class="sign-in-htm">
    				<div class="group">
    					<label for="user" class="label">Usuario</label>
    					<input id="user" type="text" class="input" name="usuario">
    				</div>
    				<div class="group">
    					<label for="pass" class="label">Contraseña</label>
    					<input id="pass" type="password" class="input" data-type="password" name="password">
    				</div>
    				<div class="group">
    					<input id="check" type="checkbox" class="check" checked>
    					<label for="check"><span class="icon"></span> Recuérdame</label>
    				</div>
    				<div class="group">
    					<input type="submit" class="button" value="Entrar">
    				</div>
    				<div class="hr"></div>
    				<div class="foot-lnk">
    					<a href="#recuperar" style='text-decoration:none;color:white';>Olvidaste la contraseña?</a>
    				</div>
    			</div>
    			<div class="sign-up-htm">
            <div class="group">
              <label for="name" class="label">Nombre</label>
              <input id="name" type="text" class="input" value="<?=$nombre?>">
            </div>
    				<div class="group">
    					<label for="user" class="label">Usuario</label>
    					<input id="user" type="text" class="input" name="usuario">
    				</div>
    				<div class="group">
    					<label for="pass" class="label">Contraseña</label>
    					<input id="pass" type="password" class="input" data-type="password" name="password">
    				</div>
    				<div class="group">
    					<label for="email" class="label">Email</label>
    					<input id="email" type="text" class="input" name="email">
    				</div>
    				<div class="group">
    					<input type="submit" class="button" value="Registrarme">
                                        <label class="tenesCuenta" for="tab-1" style="margin-top: 40px"!important;!important;>Ya tienes cuenta?</a>
    				</div>
    				
    			</div>
    		</div>
    	</div>
    </div>
      </div>
    </div>
    </form>
    <?php include("footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>