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
if ($_SESSION["pezmasgato"] == false){//--Variable de seguridad)
	header("Location: ".$camino."index.php?error=Error al ingresar al Sistema");
	exit;
	}
?>
		// initialise plugins
		jQuery(function(){
			jQuery('#example').superfish({
				//useClick: true
			});
		});

		</script>
		<script>
window.history.forward (1);
</script>
</head>

<body>

<div class="header-wrapper">
	<div class="wrapper">
		<div class="logo">
            	<h1>Matematicas</h1>
                <span></span>        </div>
    	<div class="menu">
      <ul class="sf-menu" id="example">

        <li><form action="salir.php" id="index" name="index" method="post">
		 <b><input  type="submit" class="button" value="Salir"/></b>
		</form></li>

         

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
	<h1>RESULTADOS</h1>
    <h2>Categoria <?php if($_SESSION["categoria"]==1) echo "Prejuvenil";
	if($_SESSION["categoria"]==4) echo "Juvenil"; ?></h2>
</div>
	<div class="content">
	
		
    	
		<table width="1000px" height="200px"  align="center">
		<tr align="center">
		<th align="center">USUARIO</td>
		<th align="center">Ronda 1</td>
		<th align="center">Tiempo Ronda 1</td>
		<th align="center">Ronda 2</td>
		<th align="center">Tiempo Ronda 2</td>
		<th align="center">Ronda 3</td>
		<th align="center">Tiempo Ronda 3</td>
		<th align="center">Total</td>
		<th align="center">Tiempo Total</td>
		
		<?php 
		
$servidor	= 'localhost';
$base_datos	= 'matematicas';
if($_SESSION["categoria"]==1){
$tabla	= 'secundaria1';
}
if($_SESSION["categoria"]==4){
$tabla	= 'secundaria2';
}
$usr_sistema	= 'root';//$usr_sistema	= 'root';
$pass_sistema	= 'projects'; //$pass_sistema	= 'projects';

$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
date_default_timezone_set("America/Bogota");

if (!$conexion){
header ("Location: index.php?mensaje=error de conexion.");
exit(); 
}
else{
$sql= "SELECT nombre, resultado1, tiempo1, resultado2, tiempo2, resultado3, tiempo3, total, tiempot "
		."FROM ".$base_datos.".".$tabla." ORDER BY total DESC, tiempot ASC";
		
		$sql = mysqli_query($conexion, $sql);
		
		while($rs = mysqli_fetch_array($sql)) { 
		 echo "<tr align='center'>" 
           ."<td>".$rs[0]."</td>" 
           ."<td>".$rs[1]."</td>" 
           ."<td>".$rs[2]."</td>" 
           ."<td>".$rs[3]."</td>" 
           ."<td>".$rs[4]."</td>" 
		   ."<td>".$rs[5]."</td>" 
           ."<td>".$rs[6]."</td>" 
           ."<td>".$rs[7]."</td>" 
           ."<td>".$rs[8]."</td>" 
           ."</tr>"; 
		 }
}
?>		
		</table>
		<p>
		<form action="results.php" id="index" name="index" method="post">
		 <input type="submit" class="button" value="Recargar"/>
		</form> 
		</p>
    </div>
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
</body>
<script>
if (history.forward(1)) {
	location.replace(history.forward(1));
}
</script>
</html>
