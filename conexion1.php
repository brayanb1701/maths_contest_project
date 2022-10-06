<?php 
//-- variables para conectarse a la base de datos
ini_set('session.gc_maxlifetime',3600);  // 1 hora
session_start();
error_reporting(E_ALL);
ob_start();
$_SESSION["pezmasgato"] = false;//--Variable de seguridad
$categoria=$_POST["categoria"];
$_SESSION["categoria"] = $categoria;
$servidor	= 'localhost';
$base_datos	= 'matematicas';
if($_SESSION["categoria"]==1){
$tabla	= 'control1';
}
if($_SESSION["categoria"]==4){
$tabla	= 'control2';
}
$usr_sistema	= 'root';//$usr_sistema	= 'root';
$pass_sistema	= 'projects'; //$pass_sistema	= 'projects';
//-- Conexion a la Base de datos segun variables declaradas 
//$conexion=mysql_connect($servidor, $usr_sistema, $pass_sistema);
date_default_timezone_set("America/Bogota");
$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);

$nombre=$_POST['name'];
$contraseña	= $_POST['password'];//$_REQUEST['numero'];
$fecha = date("Y-m-d");
$hora = date("H:i:s");

if($nombre=="admin" && $contraseña=="1234"){
header ("Location: results.php?mensaje=Bienvenido.");
$_SESSION["pezmasgato"] = true;
}
else if($nombre!="admin"){
if (!$conexion){
header ("Location: index.php?mensaje=error de conexion.");
exit(); 
}
else{
//-- Captura de las variables del formulario.

 

//-- Consulta Sql para guardar el registro o datos digitados.
$sql = "INSERT INTO ".$base_datos.".".$tabla."(name,password, fecha, hora)"
." VALUES('$nombre','$contraseña','$fecha','$hora')"; 
 //echo $sql;   
//$sql = mysql_query($sql, $conexion); 
   
$sql = mysqli_query($conexion, $sql); 

$_SESSION["pezmasgato"] = true;//--Variable de seguridad
$_SESSION["verifica1"] = true;
$_SESSION["name"] = $nombre;

header ("Location: page.php?mensaje=Registro Incluido con Exito.");
exit(); 
}
}
else{
header ("Location: index.php?mensaje=Contraseña incorrecta");
exit(); 
}
?>
