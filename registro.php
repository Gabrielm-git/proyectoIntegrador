<?php
session_start();

require_once 'controladores/funciones.php';

$arrayDeErrores = "";

if($_POST) {
   $arrayDeErrores = validarRegistracion($_POST);
   if(count($arrayDeErrores) === 0) {
        // REGISTRO AL USUARIO
       $usuarioFinal = [
            'nombre' => trim($_POST['nombre']),
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
        // ENVIAR A LA BASE DE DATOS $usuarioFinal
        $jsonDeUsuario = json_encode($usuarioFinal);
        file_put_contents('usuarios.json', $jsonDeUsuario . PHP_EOL, FILE_APPEND);
        header("Location: logueo.php");
      exit;
    }
}


?>