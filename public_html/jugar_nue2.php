<!DOCTYPE html>
<html lang="es">
<head>
  <title>Trivia Preguntas y Respuestas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 
<link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css-trivia/estilo-home.css">
 <link rel="stylesheet" href="css/stylepyr.css">
<link rel="stylesheet" href="/css-trivia/footer.css">
 
   

</head>
<body>
<?php
include("cabecera_nue.php");
?>

     
     <div class="caja jumbotron bg-light block-center">
    <img class="pyr mx-auto d-block rounded-circle img-thumbnail" id="minipregres"src="img/trivia.jpg" alt="preguntasyrespuestas"><br>
    <h3 class="question text-center">¿Quien convirtió el séptimo gol en la histórica goleada <br> de Estudiantes 7-0 Gimnasia?</h3>
    <hr class="my-4">
    <div class="progress">
      <div class="progress-bar bg-warning w-50"><s>50%!</s></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;50% restante!
    </div>
    <hr class="my-4">
    <div class="botonesr btn-group-vertical mx-auto d-block">
      <button type="button" class="btn mx-auto d-block btn-outline-warning btn-lg">Pablo 'El Payaso' Luguercio</button><br>
      <button type="button" class="btn mx-auto d-block btn-outline-success btn-lg">Jose Luis 'Caldera' Calderón</button><br>
      <button type="button" class="btn mx-auto d-block btn-outline-danger btn-lg">Juan Sebastian 'La Brujita' Verón</button><br>
      <button type="button" class="btn mx-auto d-block btn-outline-primary btn-lg">Mariano 'El Tanque' Pavone</button>
      </div>
    </div>
  

  

<?php
include("footer_nue.php");
?>
</body>
</html>