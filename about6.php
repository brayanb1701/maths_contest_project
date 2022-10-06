<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
error_reporting(E_ALL);
ob_start();
date_default_timezone_set('America/Bogota');
if ($_SESSION["pezmasgato"] == false){//--Variable de seguridad)
	header("Location: ".$camino."index.php?error=Error al ingresar al Sistema");
	exit;
	}
if($_SESSION["verifica3"]==true){
	$_SESSION['verifica3']=false;;   
$_SESSION["horafija"]="hora";
$_SESSION["horafija"]=time()*1000;
}
else if(base64_decode($_GET["id"])!="encriptacion3") {
	header("Location: ".$camino."index.php?error=Intento hacer trampa");
	exit;
	}

/*else{
echo '<script>
alert("No vuelva a recargar la pagina");
</script>';
}*/
?>
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

		// initialise plugins
		jQuery(function(){
			jQuery('#example').superfish({
				//useClick: true
			});
		});

		</script>
		
		<script>
				function hacer1(){
var1=document.getElementById('index').value
	var2=document.getElementById('a1').value
				if(var1==var2){
alert("si")
					//document.getElementById("index").submit()
					} else{
						alert("funciona")
					}
				}
				</script>
</head>
<script>
const countDown=<?php echo $_SESSION["horafija"]; ?>+600000;

//m1=currentdate.getMinutes();
//s1=currentdate.getSeconds();
//alert(h1+" "+m1+" "+s1);
// Set the dat e we're counting down to
var countDownDate = new Date(countDown).getTime();

// Update the count down every 01 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
 // var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML ="Quedan "+ hours + " Hrs, "
  + minutes + " Mins, " + seconds + " Segs  &nbsp; para responder  ";

  // If the count down is finished, write some text 
  if (distance <= 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
	document.getElementById("index").submit();
  }
}, 1000);
</script>

<body>

<script>
window.history.forward (1);
</script>
<div class="header-wrapper">
	<div class="wrapper">
		<div class="logo">
            	<h1> PREGUNTAS</h1>

                
                <span>Ronda 3  </span>
                 <div id='clock'></div>
<div id='clock-2' class='other_clock'></div>
<div id='clock-3' class='other_clock'></div>   </div>
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
	<h1>CATEGORIA JUVENIL</h1>
    <h2>Noveno, Decimo, Once <p><center><p id="demo" style="color:white; text-shadow:#e25517 1px 4px 3px; font-size:16px;"></p></center></p></h2>
</div>
	<div class="content">
	<form action="conexion2.php" id="index" name="index" method="post">
	 <p> El profesor Aníbal pensando un ejercicio demora los 5/3 de un minuto; redactando el enunciado 4 minutos y 15 segundos; buscando los distractores 1/12 de hora y pasándolo a limpio 3 y 3/4 de minuto.  El  tiempo que  empleó en elaborar 35 preguntas de una prueba de aptitud matemática es:  <br>

  <input type="radio"  id="a2" name="a3" value="12 h y 15 minutos">12 h y 15 minutos<br>
  <input type="radio"  id="a3" name="a3" value="30.000 segundos">30.000 segundos<br>
  <input type="radio"  id="a1" name="a3" value="6.250 minutos">6.250 minutos<br>
  <input type="radio"  id="a4" name="a3" value="16 h y 3 segundos">16 h y 3 segundos<br></p>
 

    </div>
	

    <div class="content">

              <center><p><strong>Interprete las siguientes imagenes y responda</strong></p></center><br><br> <p>El perímetro de un rectángulo ABCD es 30 cm. Otros 3 rectángulos se ponen de manera que sus centros son los puntos A, B y D como se muestra en la figura. Si la suma de los perímetros de los tres rectángulos es 20 cm, ¿cuál es la longitud de la línea gruesa?  </p> <br><br><br>

<center><img src="images/cuadro.jpg" width="50%" height="50%"><br><br><br>
  <input type="text" class="input_text"  id="b1" name="b3" value="" autocomplete="off"/><h6> cm<h6></center><br>
 
  
  

    </div>




    <div class="content">

                      <p> Laura tiene dos tarjetas. Escribió un número en cada uno de los lados de las tarjetas. A la derecha se ve un lado de cada una de las tarjetas. La suma de los dos números de ambas tarjetas es igual. Además la suma de los cuatro números es 32. De los números que no se ven, se resta el menor del mayor. ¿Cuál es ese resultado?   
                          
						
                     <br><br><br>

					 <center><img src="images/cartas.jpg" width="50%" height="50%"><br><br><br>
 <input type="text" class="input_text" name="c3" id="c1" value="" autocomplete="off"/></center><br>

    </div>

	<div align="right"><input type="hidden" name="ronda" value="3" /> <input type="submit" value="Guardar"></div>
</form>

</div>
</div>
<div class="clear"></div>
</div><!---page-content--->

<div class="footer-wrapper">
	<div class="footer">
		<div class="panel marRight30">
        	<div class="title">
            <h1>MUNDIAL</h1>

        <div class="panel marRight30">
        	<div class="title">
            <h1>MATEMATICO</h1>
            </div>
        <div class="panel">
        	<div class="title">
            <h1>COINSDA</h1>
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
<script>
if (history.forward(1)) {
	location.replace(history.forward(1));
}
</script>
</body>
</html>

