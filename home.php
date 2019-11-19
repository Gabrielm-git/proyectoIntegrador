<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="/css-trivia/estilo-home.css">
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>

<body>
  <?php
  include ("header.php");
   ?>
  <div class="container">
    <section>
      <div class="boton1">
        <a href="jugar.php" class="btn btn-color">JUGAR</a>
      </div>
      <div class="boton2">
        <a href="ranking.php"class="btn2 btn-color2">RANKING</a>
      </div>
      <div class="boton2">
        <a href="abm.php" onclick="location.href = 'abm.php'" class="btn3 btn-color3">CREA UNA PREGUNTA</a>
      </div>
    </section>
  </div>
    <?php
    include ("footer.php");
     ?>
</body>
</html>