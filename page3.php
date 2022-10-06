<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MUNDIAL MATEMATICO</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/superfish.css" media="screen">
<script src="js/jquery-1.9.0.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script>
<?php 
//-- variables para conectarse a la base de datos
session_start();
error_reporting(E_ALL);
ob_start();

?>
		// initialise plugins
		jQuery(function(){
			jQuery('#example').superfish({
				//useClick: true
			});
		});

		</script>
</head>
<script>
window.history.forward (1);
</script>
<body>

<div class="header-wrapper">
	<div class="wrapper">
		<div class="logo">
            	<h1>Matematicas</h1>
                <span></span>        </div>
    	<div class="menu">
      <ul class="sf-menu" id="example">

        <li> <a href="salir.php">Salir</a> </li>

      </ul>
    </div>
    <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<!---header-wrapper--->
<div class="clear"></div>
<div class="page-content">
<div class="page">
<div class="panel">
<div class="title">
	<h1>INSTRUCCIONES</h1>
    <h2>TERCERA RONDA</h2>
</div>
	<div class="content">
    	<p>Para concluir este juego matemático está la tercera ronda la cual contiene tres preguntas de mayor dificultad a las anteriores, dos de estas preguntas son abiertas, sin embargo, son de única respuesta y solamente se pueden digitar números en las casillas, considerando que en caso que se digite una letra, la respuesta será inválida. Por otro lado, una de las preguntas es de selección multiple con cuatro opciones de respuesta.<br> Cada una de las preguntas tiene un valor de 5 puntos, para un total de 15 puntos. El tiempo máximo de solución es de 15 minutos para la totalidad de las preguntas, teniendo en cuenta que no puede ser detenido ni modificado. Al finalizar debe seleccionar el botón "Guardar" para que sus respuestas sean calificadas y por último, obtener el puntaje y posición de su respectivo grupo. Cabe mencionar que ninguna pregunta puede tener doble respuesta, de lo contrario será anulada.<br><h2><font color="white">¡BUENA SUERTE!</font></h2></p></p>
		<p>
<form action="about<?php echo $_SESSION["categoria"]+2; ?>.php?id=<?php echo base64_encode('encriptacion3'); ?>" id="index" name="index" method="post">		
 <input type="submit" class="button" value="Continuar"/>
		</form>
		</p>
    </div>
</div>
</div>
<div class="clear"></div>
</div><!---page-content--->

<div class="footer-wrapper">
	<div class="footer">
	</div>
            <div class="content">
            <p>Copyright (c) websitename. All rights reserved. 
< <a href="#">www.alltemplateneeds.com</a> > <br />
Images From: <a href="www.photorack.net">www.photorack.net</a></p>
</div>
        </div>
    </div>
    <div class="clear"></div>
</div><!---footer-wrapper--->
</body>
<script>
if (history.forward(1)) {
	location.replace(history.forward(1));
}
</script>
</html>
