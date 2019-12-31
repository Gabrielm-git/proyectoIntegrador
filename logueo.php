<!DOCTYPE html>
<html lang="es" dir="ltr" xml:lang="es">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/estilo-header.css">
    <link rel="stylesheet" href="css/estilo-footer.css">
  <link rel="stylesheet" href="css/estilo-botonera.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
 <body style="font-family:Consolas; background-image: url(../img/Background.jpg);
	font-family: Tahoma;">

  <?php include("header.php") ?>
<div class="container border" style="background-color: #2E2E2E"!important;>
		<br />


<form class="form-horizontal" action="login.php" method="POST">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label"style="color: white"!important;>Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label"style="color: white"!important;>Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
          </div>
        </div>
      </form>

</div>
  <?php include("footer.php") ?>
  </body>
</html>