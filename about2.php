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
if($_SESSION["verifica2"]==true){
	$_SESSION['verifica2']=false;;   
$_SESSION["horafija"]="hora";
$_SESSION["horafija"]=time()*1000;
}
else if(base64_decode($_GET["id"])!="encriptacion2") {
	header("Location: ".$camino."index.php?error=Intento hacer trampa");
	exit;
	}
/*	
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
		
		
</head>
<script>
const countDown=<?php echo $_SESSION["horafija"]; ?>+900000;

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

                
                <span>Ronda 2  </span>
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
	<h1>CATEGORIA PREJUVENIL</h1>
	
    <h2>Sexto, Septimo, Octavo <p><center><p id="demo" style="color:white; text-shadow:#e25517 1px 4px 3px; font-size:16px;"></p></center></p></h2>
</div>
	<div class="content">
	<form action="conexion2.php" id="index" name="index" method="post">
	 <p> Enrique  compró una credencial en $ 1.500; Fabio la compro en un 30% menos que Enrique; pero Luis la compró en los mismo que Fabio más un 10%. El valor en que la compró   Luis fue de:  <br>
 
  <input type="radio"  id="a2" name="a2" value="10.050">10.050<br>
  <input type="radio"  id="a3" name="a2" value="1.115">1.115<br>
  <input type="radio"  id="a1" name="a2" value="1.200">1.200<br>
  <input type="radio"  id="a4" name="a2" value="1.250">1.250<br></p>
 

    </div>
	

    <div class="content">

              <p>Al medir una pieza de tela de 36 metros con un metro incompleto; resultan 40 metros. Esto quiere decir que al metro le faltan:  <br>


  <input type="radio"  id="b1" name="b2" value="4">4<br>
  <input type="radio"  id="b2" name="b2" value="5">5<br>
  <input type="radio"  id="b3" name="b2" value="6">6<br>
  <input type="radio"  id="b4" name="b2" value="10">10<br>
  
  

    </div>




    <div class="content">

                      <p>Paco deja una herencia para repartir entre sus tres hijos de la siguiente forma: ½ Luis, 2/5 Pedro  y el resto que son $ 800.000 a José. La herencia es de:   
                          
                     <br>

  <input type="radio"  id="c1" name="c2" value="6000000">6000000<br>
  <input type="radio"  id="c2" name="c2" value="8000000">8000000<br>
  <input type="radio"  id="c3" name="c2" value="9000000">9000000<br>
  <input type="radio"  id="c4" name="c2" value="12000000">12000000<br>
 
    </div>



    <div class="content">

              <p>
                      Jenny es mayor que Maritza; Helena es menor que Pilar y mayor que Marlín. Si Pilar es menor que Maritza; la mayor es       
                       <br>


  <input type="radio"  id="d1" name="d2" value="Marlín">Marlín<br>
  <input type="radio"  id="d2" name="d2" value="Helena">Helena<br>
  <input type="radio"  id="d3" name="d2" value="Maritza">Maritza<br>
  <input type="radio"  id="d4" name="d2" value="Jenny">Jenny<br>

    </div>



    <div class="content">

              <p>
                    El número de segundos que equivalen a  2 horas y 5 minutos es:          
                       <br>

 

  <input type="radio"  id="e1" name="e2" value="7000">7000<br>
  <input type="radio"  id="e2" name="e2" value="7500">7500<br>
  <input type="radio"  id="e3" name="e2" value="7550">7550<br>
  <input type="radio"  id="e4" name="e2" value="6500">6500<br>

    </div>
	<div align="right"><input type="hidden" name="ronda" value="2" /> <input type="submit" value="Guardar"></div>
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

