<?php
    session_start();
    // Funciones
  function pre($algo) {
    echo '<pre>';
    var_dump($algo);
    echo '</pre>';   }
  function dd($algo) {
    pre($algo);
    exit; }
  function validarRegistracion($unArray) {
    $errores = [];
    // Validacion nombre
    if( isset($unArray['nombre']) ) {
        if( empty($unArray['nombre']) ) {
            $errores['nombre'] = "ERROR: Este campo debe completarse.";
        }
        elseif( strlen($unArray['nombre']) < 2 ) {
            $errores['nombre'] = "ERROR: Tu nombre debe tener al menos 2 caracteres.";
          } }
    // Validacion email
    if( isset($unArray['email']) ) {
        if( empty($unArray['email']) ) {
            $errores['email'] = "ERROR: Este campo debe completarse.";
        }
        elseif( !filter_var($unArray['email'], FILTER_VALIDATE_EMAIL) ) {
            $errores['email'] = "ERROR: Debés ingresar un email válido.";
          }
          $arrayUsuarios= json_decode(file_get_contents("../usuarios.json"), true);
          foreach ($arrayUsuarios as $usuario) {
            if($usuario['email'] == $unArray['email']){
              $errores['email'] = "ERROR: Email ya ingresado"; }  }
          echo var_dump($errores);  }
    if( isset($unArray['password']) ) {
        if( empty($unArray['password']) ) {
            $errores['password'] = "ERROR: Este campo debe completarse.";
        }
        elseif( strlen($unArray['password']) < 6 ) {
            $errores['password'] = "ERROR: Tu contraseña debe tener al menos 6 caracteres.";
        }    }
    if( isset($unArray['repassword']) ) {
        if( empty($unArray['repassword']) ) {
            $errores['repassword'] = "ERROR: Este campo debe completarse.";
        }
        elseif($unArray['password'] != $unArray['repassword']) {
            $errores['repassword'] = "ERROR: Tenés que ingresar la misma contraseña";
        }  }
    return $errores;
}
function persistirDato($arrayE, $campo) {
    if( isset($arrayE[$campo]) ) {
        return "";
    } else {
        if(isset($_POST[$campo])) {
            return $_POST[$campo];
        } } }
function armarArrayUsuario() {}
function abrirBBDD($unArchivo) {
    $usuariosGuardados = file_get_contents($unArchivo);
    $explodeDeUsuarios = explode(PHP_EOL, $usuariosGuardados);
    array_pop($explodeDeUsuarios);
    return $explodeDeUsuarios;
}
$arrayError = "";
if($_POST) {
    $arrayError = validarRegistracion($_POST);
    if(count($arrayError) === 0) {
        // Login
        $arrayUsuarios = abrirBBDD('usuarios.json');
        foreach($arrayUsuarios as $usuarioJson) {
            $userFinal = json_decode($usuarioJson, true);
            if($_POST['email'] == $userFinal['email']) {
                if(password_verify($_POST['password'], $userFinal['password'])) {
                    // Session
                    $_SESSION['email'] = $userFinal['email'];
                    if(isset($_POST['recordarme']) && $_POST['recordarme'] == "on") {
                        // Cookies
                        setcookie('userEmail', $userFinal['email'], time() + 60 * 60 * 24 * 7);
                        setcookie('userPass', $userFinal['password'], time() + 60 * 60 * 24 * 7);
                    }
                    header('Location: welcome.php');
                    exit;
                } } } } }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    <form class="formulario" action="login.php" method="post">
    <div class="jumbotron jumbotron-fluid" style="background-image: url(../img/Background.jpg)">
      <div class="container">
        <div class="login-wrap">
    	<div class="login-html">
    		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingresar</label>
    		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarme</label>
    		<div class="login-form">
    			<div class="sign-in-htm">
    				<div class="group">
    					<label for="user" class="label">Usuario</label>
    					<input id="user" type="text" class="input">
    				</div>
    				<div class="group">
    					<label for="pass" class="label">Contraseña</label>
    					<input id="pass" type="password" class="input" data-type="password">
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
    					<a href="#recuperar">Olvidaste la contraseña?</a>
    				</div>
    			</div>
    			<div class="sign-up-htm">
            <div class="group">
              <label for="name" class="label">Nombre</label>
              <input id="name" type="text" class="input">
              <small class="text-danger"><?= isset($arrayError['nombre']) ? $arrayError['nombre'] : "" ?></small>
            </div>
            <div class="group">
    					<label for="email" class="label">Email</label>
    					<input id="email" type="text" class="input">
              <small class="text-danger"><?= isset($arrayError['email']) ? $arrayError['email'] : "" ?></small>
    				</div>
            <div class="group">
    					<label for="pass" class="label">Contraseña</label>
    					<input id="pass" type="password" class="input" data-type="password">
              <small class="text-danger"><?= isset($arrayError['password']) ? $arrayError['password'] : "" ?></small>
    				</div>
            <div class="group">
                <label for="repass" class="label">Confirmar contraseña</label>
                <input type="password" data-type="password" class="input" name="repassword">
                <small class="text-danger"><?= isset($arrayDeErrores['repassword']) ? $arrayDeErrores['repassword'] : "" ?></small>
            </div> <br>
    				<div class="group">
    					<input type="submit" class="button" value="Crear cuenta">
    				</div>
    				<div class="hr"></div>
    				<div class="foot-lnk">
    					<a href="login.php" for="tab-1">Ya tienes cuenta?</a>
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
