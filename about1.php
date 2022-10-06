<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

session_start();
error_reporting(E_ALL);
ob_start();
$_SESSION["verifica2"] = true;
date_default_timezone_set('America/Bogota');
if ($_SESSION["pezmasgato"] == false){//--Variable de seguridad)
	header("Location: index.php?error=Error al ingresar al Sistema");
	exit;
	}
if($_SESSION["verifica1"]==true){
	$_SESSION['verifica1']=false;
$_SESSION["horafija"]=time()*1000;
}
else if(base64_decode($_GET["id"])!="encriptacion1") {
	header("Location: index.php?error=Intento hacer trampa");
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
   </div>
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
       <p> En un colegio el número de estudiantes de sexto grado es ¾ del número de estudiantes del grado séptimo y el número de estudiantes del grado 6 representa la mitad de los estudiantes del grado 5. Si hay 36 estudiantes en grado séptimo; el número de estudiantes de grado 5 es:  <br>

  <input type="radio"  id="a2" name="a1" value="50">50<br>
  <input type="radio"  id="a3" name="a1" value="108">108<br>
  <input type="radio"  id="a1" name="a1" value="54">54<br>
  <input type="radio"  id="a4" name="a1" value="27">27<br></p>

    </div>
	

    <div class="content">

               <p>En un supermercado le dan a María por cada $ 10.000, un valor de $ 700, por el cambió de bonos. Cuánto debe recibir si cambió 1 billete de $ 10.000, 3 billetes de $ 20.000, 1 billete de $50.000 y 4 billetes  de $ 5.000  <br>

  <input type="radio"  id="b1" name="b1" value="8600">8600<br>
  <input type="radio"  id="b2" name="b1" value="9800">9800<br>
  <input type="radio"  id="b3" name="b1" value="1200">12400<br>
  <input type="radio"  id="b4" name="b1" value="6800">6800<br>

    </div>




    <div class="content">

                      <p>Mauricio se presenta a las pruebas de Icfes y cada vez obtiene 6 puntos menos. Si la primera ve obtuvo 344 y la última 320; ¿cuántas veces se presento?   
                          
                     <br>

  <input type="radio"  id="c1" name="c1" value="3">3<br>
  <input type="radio"  id="c2" name="c1" value="4">4<br>
  <input type="radio"  id="c3" name="c1" value="5">5<br>
  <input type="radio"  id="c4" name="c1" value="6">6<br>
 
    </div>



    <div class="content">

              <p>
                       Una piña pesa los 2/3 del peso de un melón más 100 gramos. Si la piña pesa 2.500 gramos; el peso en gramos del melón es:     
                       <br>

  <input type="radio"  id="d1" name="d1" value="1800">1800<br>
  <input type="radio"  id="d2" name="d1" value="2400">2400<br>
  <input type="radio"  id="d3" name="d1" value="3000">3000<br>
  <input type="radio"  id="d4" name="d1" value="3600">3600<br>

    </div>



    <div class="content">

              <p>
                    María tenía $ 9.600. Con los ¾ compra un libro y con los 3/8 del resto compra un cuaderno. El costo del cuaderno es:         
                       <br>

  <input type="radio"  id="e1" name="e1" value="900">900<br>
  <input type="radio"  id="e2" name="e1" value="1800">1800<br>
  <input type="radio"  id="e3" name="e1" value="2700">2700<br>
  <input type="radio"  id="e4" name="e1" value="3200">3200<br>

    </div>

    <div class="content">

              <p>La edad de Natalia es 1/2 de los 2/3 de la edad de su papá. Si éste tiene 48 años, Natalia tendrá:  
                          
                       <br>

  <input type="radio"  id="f1" name="f1" value="13">13<br>
  <input type="radio"  id="f2" name="f1" value="14">14<br>
  <input type="radio"  id="f3" name="f1" value="15">15<br>
  <input type="radio"  id="f4" name="f1" value="16">16<br>


    <div class="content">

              <p>
                     Rosa  le da a Ana  los 2/5 de lo que tenía más $ 3.000 y le quedan $ 9.000. La cantidad que  tenia Rosa inicialmente es       
                       <br>

  <input type="radio"  id="g1" name="g1" value="10000">10000<br>
  <input type="radio"  id="g2" name="g1" value="12000">12000<br>
  <input type="radio"  id="g3" name="g1" value="15000">15000<br>
  <input type="radio"  id="g4" name="g1" value="20000">20000<br>

    </div>



    <div class="content">

              <p>Luisa después de gastar 1/3 de lo que tenía y 1/6 del resto; aún le quedan $15.000. La cantidad que tenía inicialmente es de  
                          
                      <br>

  <input type="radio"  id="h1" name="h1" value="32000">32000<br>
  <input type="radio"  id="h2" name="h1" value="45000">45000<br>
  <input type="radio"  id="h3" name="h1" value="27000">27000<br>
  <input type="radio"  id="h4" name="h1" value="54000">54000<br>

    </div>



    <div class="content">

              <p>Mauricio compra un equipo de sonido en $ 450.000 y lo vende en los 7/10 del costo. La cantidad de dinero que perdió es:
                          
                      <br>

  <input type="radio"  id="i1" name="i1" value="45000">45000<br>
  <input type="radio"  id="i2" name="i1" value="90000">90000<br>
  <input type="radio"  id="i3" name="i1" value="135000">135000<br>
  <input type="radio"  id="i4" name="i1" value="180000">180000<br>

    </div>



    <div class="content">

              <p> Los ¾ de los 4/ 6  de 1/ 2 de 600 es  
                          
                       <br>

  <input type="radio"  id="j1" name="j1" value="240">240<br>
  <input type="radio"  id="j2" name="j1" value="150">150<br>
  <input type="radio"  id="j3" name="j1" value="160">160<br>
  <input type="radio"  id="j4" name="j1" value="120">120<br>
 
    </div>

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
		 </div>
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

