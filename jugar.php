<!DOCTYPE html>
<! jugar.php JUEGO TRIVIA>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jugar a Trivia - Preguntas y Respuestas!</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/stylepyr.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body style="font-family:Consolas;">
    <?php include_once("header.php"); ?>
    <div class="caja jumbotron bg-light block-center" id="cajita">
    <img class="pyr mx-auto d-block rounded-circle img-thumbnail" id="minipregres"src="img/trivia.jpg" alt="preguntasyrespuestas"><br>
    <h3 class="question text-center">¿Quien convirtió el séptimo gol en la histórica goleada <br> de Estudiantes 7-0 Gimnasia?</h3>
    <hr class="my-4">
    <div class="progress" style="height:40px;">
      <div class="progress-bar-striped progress-bar-animated bg-warning w-50">
        <s><p style="text-align:center;padding:8px;font-size: 15px;color:black;">50%!</p></s>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <p style="text-align:center;padding:10px;">50% restante</p></div>
        <div class="progress-bar-striped bg-dark progress-bar-animated w-50">
          <p style="text-align:center;padding:8px;font-size: 15px;color:lightyellow;">50% restante</p></div></div>
    <hr class="my-4">
    <div class="botonesr btn-group-vertical mx-auto d-block" id="botones">
      <button type="button" class="btn mx-auto d-block btn-outline-warning btn-lg">Pablo 'El Payaso' Luguercio</button><br>
      <button type="button" class="btn mx-auto d-block btn-outline-success btn-lg">Jose Luis 'Caldera' Calderón</button><br>
      <button type="button" class="btn mx-auto d-block btn-outline-danger btn-lg">Juan Sebastian 'La Brujita' Verón</button><br>
      <button type="button" class="btn mx-auto d-block btn-outline-primary btn-lg">Mariano 'El Tanque' Pavone</button>
      </div>
    </div>
    <?php include_once("footer.php"); ?>
  </body>
</html>
