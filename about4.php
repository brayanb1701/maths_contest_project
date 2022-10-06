<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
ini_set('session.gc_maxlifetime',2820);  // 1 hora
session_start();
error_reporting(E_ALL);
ob_start();
$_SESSION["verifica2"] = true;
date_default_timezone_set('America/Bogota');
if ($_SESSION["pezmasgato"] == false){//--Variable de seguridad)
	header("Location: ".$camino."index.php?error=Error al ingresar al Sistema");
	exit;
	}
if($_SESSION["verifica1"]==true){
	$_SESSION['verifica1']=false;
$_SESSION["horafija"]=time()*1000;
}
else if(base64_decode($_GET["id"])!="encriptacion1") {
	header("Location: ".$camino."index.php?error=Intento hacer trampa");
	exit;
	}
/*echo '<script>
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


<body >

<script>
window.history.forward (1);
</script>

<div class="header-wrapper">
	<div class="wrapper">
		<div class="logo">
            	<h1> PREGUNTAS</h1>

                
                <span> Ronda 1 </span>
  <!--<script language="Javascript"  type="text/javascript">
    window.onload = function (){
        r = new clockCountdown('clock',{'days':5,'hours':20,'minutes':00,'seconds':3});
        r2 = new clockCountdown('clock-2',{'days':5,'hours':10,'minutes':05,'seconds':50});
        r3 = new clockCountdown('clock-3',{'days':5,'hours':10,'minutes':05,'seconds':50});
    }
</script>
                <div id='clock'></div>
<div id='clock-2' class='other_clock'></div>
<div id='clock-3' class='other_clock'></div>-->   </div>
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
       <p> Un tanque vacío se llena en media hora y cuando está lleno se abre una llave de desagüe y lo desocupa en una hora. Si estando vacío el tanque abrimos la llave que lo llena y la de desagüe al tiempo; al cabo de una hora el tanque:  <br>

  <input type="radio"  id="a2" name="a1" value="Estará completamente vacío">Estara completamente vacio<br>                       
  <input type="radio"  id="a3" name="a1" value="Empezara a regarse">Empezara a regarse<br>
  <input type="radio"  id="a1" name="a1" value="Estara lleno en sus ¾">Estara lleno en sus ¾<br>
  <input type="radio"  id="a4" name="a1" value="Llegara a la mitad ">Llegara a la mitad<br></p>

    </div>
	

    <div class="content">

               <p>Un granjero tiene 3 vacas que producen 24 litros de leche diarios , si con el 75 % de la leche 50. La cantidad de vacas que se necesitan para producir 600 Kilogramos de mantequilla y 200 Kilogramos de queso son: <br>

  <input type="radio"  id="b1" name="b1" value="70">70<br>
  <input type="radio"  id="b2" name="b1" value="50">50<br>
  <input type="radio"  id="b3" name="b1" value="40">40<br>
  <input type="radio"  id="b4" name="b1" value="60">60<br>

    </div>




    <div class="content">

                      <p>En un concurso  se hacen 40 preguntas y cada pregunta correcta se premia con 5 puntos buenos; mientras que cada pregunta mal respondida o contestada se califica con tres puntos malos. Si contestando todas las preguntas el resultado es cero; las preguntas correctas fueron?   
                          
                     <br>

  <input type="radio"  id="c1" name="c1" value="5">5<br>
  <input type="radio"  id="c2" name="c1" value="15">15<br>
  <input type="radio"  id="c3" name="c1" value="20">20<br>
  <input type="radio"  id="c4" name="c1" value="25">25<br>
 
    </div>



    <div class="content">

              <p>
                       Si 10 autos en 10 horas consumen 10 galones de gasolina;. El número de galones que consume un auto en una hora es de:     
                       <br>

  <input type="radio"  id="d1" name="d1" value="1/100">1/100<br>
  <input type="radio"  id="d2" name="d1" value="1/10">1/10<br>
  <input type="radio"  id="d3" name="d1" value="1">1<br>
  <input type="radio"  id="d4" name="d1" value="10">10<br>

    </div>



    <div class="content">

              <p>
                    Los 2/7 de la edad de Fabio Andrés son 6 años y la edad de Jaime Alberto es los 2/3 de la edad de Fabio Andrés. Las edades de Fabio y Jaime son respectivamente:         
                       <br>

  <input type="radio"  id="e1" name="e1" value="18 y 12">18 y 12<br>
  <input type="radio"  id="e2" name="e1" value="24 y 16">24 y 16<br>
  <input type="radio"  id="e3" name="e1" value="21 y 14">21 y 14<br>
  <input type="radio"  id="e4" name="e1" value="27 y 18">27 y 18<br>

    </div>

    <div class="content">

              <p>El cubo grande esta formado por 64 cubitos iguales. Si pintamos la figura exteriormente;. El número de  cubitos que quedan pintados por una sola cara es:  
                          
                       <br>

  <input type="radio"  id="f1" name="f1" value="20">20<br>
  <input type="radio"  id="f2" name="f1" value="22">22<br>
  <input type="radio"  id="f3" name="f1" value="24">24<br>
  <input type="radio"  id="f4" name="f1" value="96">96<br>


    <div class="content">

              <p>
                     Se tiene una piscina cuya capacidad es de 32.480 litros. Está provista de dos llaves: La A vierte 201 litros es 3 minutos, y la B 540 litros en 5 minutos; además tiene un de desagüe C por el que escapan 240 litros en 8 minutos. El tiempo que tarda en llenarse la piscina, estando totalmente desocupada y abiertas las llaves y el desagüe, es:       
                       <br>

  <input type="radio"  id="g1" name="g1" value="3h 44’">3h 44’<br>
  <input type="radio"  id="g2" name="g1" value="3h 68’">3h 68’<br>
  <input type="radio"  id="g3" name="g1" value="4h 33’">4h 33’<br>
  <input type="radio"  id="g4" name="g1" value="4h 73’">4h 73’<br>

    </div>



    <div class="content">

              <p>Una vela se consume a razón de 35 gramos en una hora. Cuánto cuesta el consumo de 10 días; si se prende 4 hora diarias y el valor del consumo de 350 gramos es de $ 45:  
                          
                      <br>

  <input type="radio"  id="h1" name="h1" value="160">160<br>
  <input type="radio"  id="h2" name="h1" value="180">180<br>
  <input type="radio"  id="h3" name="h1" value="210">210<br>
  <input type="radio"  id="h4" name="h1" value="240">240<br>

    </div>



    <div class="content">

              <p>Marcos  necesita controlar un tiempo exacto de tres horas media y sólo dispone de un cronómetro que se adelanta 20 segundos cada hora; lo debe detener cuando halla marcado:
                          
                      <br>

  <input type="radio"  id="i1" name="i1" value="3 h 50 20">3 h 50’ 20’’<br>
  <input type="radio"  id="i2" name="i1" value="3 h 41 20">3 h 41’ 20’’<br>
  <input type="radio"  id="i3" name="i1" value="3 h 35 10">3 h 35’ 10’’<br>
  <input type="radio"  id="i4" name="i1" value="3 h 31 10">3 h 31’ 10’’<br>

    </div>



    <div class="content">

              <p> . Un caracol debe llegar a la cima de un muro de 9 metros de alto; pero tiene la particularidad que en el día sube 3 metros y en la noche resbala un metro. El  día que llegará el caracol a la cima del muro es el:  
                          
                       <br>

  <input type="radio"  id="j1" name="j1" value="4">4°<br>
  <input type="radio"  id="j2" name="j1" value="5">5°<br>
  <input type="radio"  id="j3" name="j1" value="6">6°<br>
  <input type="radio"  id="j4" name="j1" value="7">7°<br>
 
    </div>
<!--	<script>
				function tiempo(){
					const countDownf=;
					var nowf = new Date().getTime();
					var distancef = nowf-countDownf;
					var hours = Math.floor((distancef % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  					var minutes = Math.floor((distancef % (1000 * 60 * 60)) / (1000 * 60));
 					var seconds = Math.floor((distancef % (1000 * 60)) / 1000);
					document.getElementById("tiempo").value=hours+":"+minutes+":"+seconds;
					document.getElementById("horas").value=hours;
					document.getElementById("minutos").value=minutes;
					document.getElementById("segundos").value=seconds;
						document.getElementById("index").submit();
					
				}
				</script>
	<input type="hidden" name="horas" id="horas" value="" />
	<input type="hidden" name="minutos" id="minutos" value="" />
	<input type="hidden" name="segundos" id="segundos" value="" />
	<input type="hidden" name="tiempo" id="tiempo" value="" />-->
	<div align="right"><input type="hidden" name="ronda" value="1" /> <input type="submit" value="Guardar" ></div>
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


<script>
const countDown=<?php echo $_SESSION["horafija"]; ?>+1200000;

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

