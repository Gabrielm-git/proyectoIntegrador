<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="/css-trivia/estilo-registro.css">
        <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
		<?php
		include ("header.php");
		?>
	<div class="registro">

		<form class="formulario">

			<h1 id="REGISTRO">Registrate</h1>

			<div class="input-contenedor">
				<i class="fas fa-user icon"></i>
				<input type="text" placeholder="Nombre Completo" required>
			</div>

			<div class="input-contenedor">
				<i class="fas fa-envelope icon"></i>
				<input type="text" placeholder="Correo Electronico" required>
			</div>

			<div class="input-contenedor">
				<i class="fas fa-key icon"></i>
				<input type="password" placeholder="Contraseña" required>
			</div>

			<div class="input-contenedor">
				<input type="submit" value="Registrate" class="button">
				¿Ya tienes una cuenta?<a class="link" href="login.php"><br>Iniciar Sesión</a></p>
			</div>
		</form>
	</div>
	<?php
	include ("footer.php");
	?>
</body>
</html>