<?php
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$edad=$_POST['edad'];
$correo=$_POST['correo'];
$web=$_POST['web'];
$mensaje=$_POST['mensaje'];




$datoconec=mysqli_connect("localhost","c1600413_php","leki28poFE","c1600413_php") or die ("no se pudo conectar");
mysqli_query($datoconec,"INSERT INTO usuarios VALUES (DEFAULT,'usuario','clave','$nombre','$apellido',$edad,'$correo','$web')");



include("enviar_mail.php");
?>