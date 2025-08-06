<?php 
	$servidor="localhost";
	$bd="pruebas_eventos";
	$usr="root";
	$pass="";

	$conexion=mysqli_connect($servidor,$usr,$pass,$bd) or die("Error al conectar con la base de datos");
?>