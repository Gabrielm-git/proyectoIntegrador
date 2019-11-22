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
 
 
 <link rel="stylesheet" href="/css/css_contacto.css">
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css-trivia/footer.css">
</head>
<body>
<?php
include("header_nue.php");
?>

        	<div class="container">
    <section>
   

  
<div class="container">
    <section>
     <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST" action="enviar_mensajes.php">
                    <fieldset>
                        <legend class="text-center header">Iniciar Sesión</legend>

                        <div class="form-group" method="POST" action="iniciar_sesion.php">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                               <input id="email" name="email" type="text" placeholder="Email " class="form-control" required>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="contraseña" name="password" type="password" placeholder="Contraseña " class="form-control" required>
                            </div>
                        </div>

                      

                       

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">ENVIAR</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
    </section>
  </div>



 


   </section>
  </div>

  

<?php
include("footer_nue.php");
?>
</body>
</html>