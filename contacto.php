<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Contacto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	 crossorigin="anonymous">

</head>

<body style="background-image: url(../img/Background.jpg);">
	<?php include("header.php") ?>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<h1 class="text-white">Contacto</h1>
	</nav>
	<div class="container border" style="background-color: #2E2E2E"!important;>
		<br />
		<form action="ok.html" method="post">
			<div class="form-group">
				<label for="text" style="color: white"!important;>Nombre:</label>
				<input type="tetx" class="form-control text-info border-info border-top-0 border-left-0 border-right-0" id="name" placeholder="Nombre" name="name" required>
			</div>
			<div class="form-group">
				<label for="text" style="color: white"!important;>Apellidos:</label>
				<input type="tetx" class="form-control text-info border-info border-top-0 border-left-0 border-right-0" id="apell" placeholder="Apellidos" name="apell" required>
			</div>

			<div class="form-group">
				<label for="email" style="color: white"!important;>Correo:</label>
				<input type="email" class="form-control text-info border-info border-top-0 border-left-0 border-right-0" id="email" placeholder="Correo" name="email" required>
			</div>

			<div class="form-group">
				<label for="exampleTextarea" style="color: white"!important;>Comentario:</label>
				<textarea class="form-control text-info border-info" id="exampleTextarea" rows="3" placeholder="Escriba aquí su comentario..."></textarea>
			</div>
			<center>
				<button type="reset" class="btn btn-outline-secondary" style="color: white"!important;>Borrar</button>
				<button type="submit" class="btn btn-outline-secondary" style="color: white"!important;>Enviar</button>
			</center>
			<br /><br />
		</form>
	</div>
  <?php include("footer.php") ?>
</body>

</html>