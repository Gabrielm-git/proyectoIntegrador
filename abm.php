<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/css-trivia/estilo-abm.css">
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
<body>
    <?php
    include ("header.php");
    ?>
  <section>
    <div class="menuBotones">
    <br>
      <h3>AQUI PUEDE REALIZAR MODIFICACIONES A/B/M EN CARACTER DE ARMINISTRADOR</h3>
      <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button"onclick="location.href = 'alta.php'" class="btn btn-secondary">AGREGAR NUEVA PREGUNTA</button>
        </div>
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary">BORRAR PREGUNTA</button>
        </div>
        <div class="btn-group" role="group" aria-label="Basic example">
        <button type="button" class="btn btn-secondary">MODIFICAR PREGUNTA</button>
      </div>
    </div>
  </section>
  <?php
  include ("footer.php");
  ?>
  </body>
</html>