

<?php
$destino= "butronorlando@gmail.com";
$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];

$contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " .$telefono . "\nMensaje: " . $mensaje;

mail($destino, "Contacto", $contenido);

header("Location:contactos.html");


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
	<link href="css/bootstrap-3.3.7.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/estilos_contactos.css">
    <link rel="stylesheet" href="style.css">


  </head>
  <body>
  
  
  <div class="container">
  
  
<form action="enviar.php" method="post">
  <h2>Contactese con nosotros</h2>
  
  <p class="intro">Si desea recibir mayor información, por favor llene el siguiente formulario y nuestro agente Orlando Butron se pondra en contacto con usted.</p>
  
  <hr>
  
  <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
   
        
        <input type="text" name="nombre" placeholder="Nombre" required>
        
        <input type="text" name="correo" placeholder="Correo" required>
         
        <input type="text" name="telefono" placeholder="Teléfono" required>
          
         <input type="text" name="empresa" placeholder="Empresa Opcional">
          
        <textarea name="mensaje" placeholder="Escriba aquí su mensaje" required></textarea>
  		<p></p>
    		<input type="submit" value="Enviar" id="boton">
      </div>
      
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      		
      <br>		
      <p class="info"><strong>Contactese con nosotros</strong> Através de este formulario nos podremos en contacto.</p>

<p class="info">Estamos prestos a colaborarte con cualquier duda que tengas con respecto a taller de sistemas <strong>HTML, CSS3, BOOSTRAP, JAVASCRIPT</strong></p>
	    
      <img src="imagenes/auto.jpg" class="img-rounded img-responsive" alt="Placeholder image"> </div>
    </div>
    
  </form>
  <br>
  <br>
  
  </div>
  
  
	<script src="js/jquery-1.11.2.min.js"></script>


  <script src="js/bootstrap-3.3.7.js"></script>
</body>
</html>