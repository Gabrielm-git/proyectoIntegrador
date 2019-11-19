<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
 <link rel="stylesheet" href="css-trivia/estilo-login.css">
 <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">


</head>
<body>
	<?php
	include ("header.php");
	 ?>
	<div class="container">

 <form class="formulario">

    <h1 id="login">Iniciar Sesión</h1>
     <div class="contenedor">
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" placeholder="Correo Electrónico" required>
         </div>
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" placeholder="Contraseña" required>

         </div>
         <input type="submit" value="Ingresar" class="button">
     </div>
    </form>

			<?php
			include ("footer.php");
			 ?>

	</div>
</body>
</html>