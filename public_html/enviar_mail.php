<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$web=$_POST['web'];



$contenido_mail=
"Usuario:  ".$usuario."\r\n".
"Clave:  ".$clave."\r\n".
"Nombre:  ".$nombre."\r\n".
"apellido:  ".$apellido."\r\n".
"edad:  ".$edad."\r\n".
"correo:  ".$correo."\r\n".
"web:  ".$web;
  
$coreo="no-reply@c1600413.ferozo.com";
$var1="Registro WEB";

$remitente="From: $nombre $apellido <$correo>";
$remite="From: $var1  <$coreo>";




mail($correo,"Su Usuario fue creado correctamente",$contenido_mail,$remite);



header("Location: mensaje_enviado.php");
?>