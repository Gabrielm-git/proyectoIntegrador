<?php
$nombre=$_POST['name'];
$apellido=$_POST['apell'];
$correo=$_POST['email'];
$mensaje=$_POST['consulta'];


$contenido_mail="Nombre:  ".$nombre."\r\n".
"apellido:  ".$apellido."\r\n".
"correo:  ".$correo."\r\n".
"mensaje:  ".$mensaje;
  
$coreo="no-reply@c1381582.ferozo.com";
$var1="Consulta Trivia";

$remitente="From: $nombre $apellido <$correo>";
$remite="From: $var1  <$coreo>";


mail("contacto@c1381582.ferozo.com","Mensaje Enviado desde Formulario",$contenido_mail,$remitente);


mail($correo,"Su Mensaje enviado correctamente",$contenido_mail,$remite);



header("Location: mensaje_enviado.php");
?>