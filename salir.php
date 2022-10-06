<?php session_start();
error_reporting(E_ALL);
ob_start();
session_destroy();
$camino="";
header("Location: index.php?mensaje='Finalizado con exito");
		exit;

?>