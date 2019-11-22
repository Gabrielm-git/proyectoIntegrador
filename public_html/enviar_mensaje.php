<?php
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];


$contenido_mail="Nombre:  ".$nombre."\r\n".
"apellido:  ".$apellido."\r\n".
"edad:  ".$edad."\r\n".
"correo:  ".$correo."\r\n".
"mensaje:  ".$mensaje;
  
$coreo="no-reply@c1600413.ferozo.com";
$var1="Consulta Sitio Php";

$remitente="From: $nombre $apellido <$correo>";
$remite="From: $var1  <$coreo>";


mail("contacto@c1600413.ferozo.com","Mensaje Enviado desde Formulario",$contenido_mail,$remitente);


mail($correo,"Su Mensaje enviado correctamente",$contenido_mail,$remite);

$datoconec=mysqli_connect("localhost","c1600413_php","leki28poFE","c1600413_php") or die ("no se pudo conectar");
mysqli_query($datoconec,"INSERT INTO datosformulario VALUES (DEFAULT,'$nombre','$apellido','$edad','$correo','pedido','$mensaje')");

header("Location: mensaje_enviado.php");
?>