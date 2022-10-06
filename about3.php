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

                
                <span> Ronda 3 </span>
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
	 <p>Tomás, Laureano y Joaquín son triates. Su hermano Pablo es 3 años más grande que ellos. ¿cuál de las siguientes puede ser la suma de las edades de los cuatro?   <br>

  <input type="radio"  id="a2" name="a3" value="27">27<br>
  <input type="radio"  id="a3" name="a3" value="28">28<br>
  <input type="radio"  id="a1" name="a3" value="29">29<br>
  <input type="radio"  id="a4" name="a3" value="30">30<br></p>
 

    </div>
	

    <div class="content">

                  <p>La abuela compró suficiente comida para alimentar a sus 4 gatos durante 12 días. Cuando iba de regreso a casa recogió otros dos gatos. ¿Para cuántos días le alcanzará la comida?</p>
                          
                     <br><br><center>
  <input type="text" class="input_text"  id="b2" name="b3" value="" autocomplete="off"><h6> días<h6><br></center>

 
  

    </div>




    <div class="content">

                      <p><center><p><strong>Interprete la siguiente imagen y responda</strong></p><br><p>¿Cuánto pesa Dita?</p><br>

<img src="images/patos.jpg" width="50%" height="50%"><br><br>
  <input type="text" class="input_text"  id="b1" name="c3" value="" autocomplete="off"/><h6> Kg</h6></center>
 
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

