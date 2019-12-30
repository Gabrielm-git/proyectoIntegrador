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
  <body>

  <?php include("header.php") ?>
 <div class="container">

<form class="form-horizontal" action="registro.php" method="POST">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="email" required>
          </div>
        </div>
<div class="form-group">
          <label for="inputNombre3" class="col-sm-2 control-label">Nombre</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nombre" id="inputNombre3" placeholder="nombre" required>
          </div>
        </div>
<div class="form-group">
          <label for="inputApellido3" class="col-sm-2 control-label">Apellido</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="apellido" id="inputApellido3" placeholder="apellido" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="password" required>
          </div>
        </div>

 

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Registrare</button>
          </div>
        </div>
      </form>

</div>
  <?php include("footer.php") ?>
  </body>
</html>