<!DOCTYPE html>
<html lang="es">
<head>
  <title>Trivia Preguntas y Respuestas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css-trivia/estilo-home.css">
<link rel="stylesheet" href="/css-trivia/footer.css">

 
</head>
<body>
<?php
include("header_nue.php");
?>

        	<div class="container">
    <section>
      <div class="boton1">
        <a href="jugar_nue.php" class="btn btn-color">JUGAR</a>
      </div>
      <div class="boton2">
        <a href="ranking_nue.php"class="btn2 btn-color2">RANKING</a>
      </div>
      <div class="boton2">
        <a href="abm_nue.php" onclick="location.href = 'abm.php'" class="btn3 btn-color3">CREA UNA PREGUNTA</a>
      </div>
    </section>
  </div>

  

<?php
include("footer_nue.php");
?>
</body>
</html>