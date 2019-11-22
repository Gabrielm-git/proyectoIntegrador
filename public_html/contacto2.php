<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Trivia</title>
<link href="css/estilos2.css" rel="stylesheet"/>

 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<section id="contenedor">
	<?php
include("header2.php");
?>
    <section id="contenido">
    <h2>Contáctenos</h2>

 <div class="row">
			      <div class="col-md-4"  style="background-color:#E6FFFD">
			  

			      </div>
			      <div class="col-md-4"  style="background-color:#E6FFFD">
			       <form method="POST" action="enviar_mensaje.php">
        <ul>
            <li>Nombre: <input type="text" name="nombre" required/></li>
            <li>Apellido: <input type="text" name="apellido" required/></li>
             <li>Edad: <input type="integer" name="edad" required/></li>
            <li>Email: <input type="email" name="correo" required/></li>
            <li>Motivo: <select name="motivo">
                <option value="consulta">Consulta</option>
                <option value="Problemas al jugar">Pedido</option>
                <option value="reclamo">Reclamo</option>
            </select></li>
            <li>Mensaje: <textarea name="mensaje" rows="5"></textarea></li>
            <li><input type="submit" value="Enviar mensaje"/></li>
        </ul>
    </form>

			      </div>
			      <div class="col-md-4"  style="background-color:#E6FFFD">
			      

			      </div>
			    </div>

			    <hr>
       

        
  
    


    
   
    </section>

<?php
include("footer2.php");
?>
</section>
</body>
</html>