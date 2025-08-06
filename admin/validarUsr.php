<?php
include '../database/conexion.php';

//recibir datos
$u=$_REQUEST['dni'];
$c=$_REQUEST['psw'];
//creo la consulta
$sql="SELECT dni, nombre, correo, contra FROM usuarios WHERE dni='$u' AND contra='$c'";
//ejecuto la consulta
$resultado=mysqli_query($conexion,$sql);
//extraer datos de $resultado
$fila=mysqli_fetch_array($resultado);
$mail= $fila['correo'];
//valido usr y contra
if($fila['dni']==$u and $fila['contra']==$c)
{
	session_start();
	$_SESSION['dni']=$u;
	$_SESSION['email']=$mail;
	$nom = substr($fila['nombre'], 0, strpos($fila['nombre'], " "));
	//$nom=$_SESSION['nombre'];
	header('Location: ../turnero.php');
}
else
{
	echo "Usuario y/o contraseñas incorrectos";
	echo "<a href='../login.php'>Intetar otra vez</a>";
}
mysqli_close($conexion);

?>