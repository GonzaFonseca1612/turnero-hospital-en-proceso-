<?php
include '../database/conexion.php';

//recibir datos
$u=$_REQUEST['dni'];
$c=$_REQUEST['psw'];
//creo la consulta
$sql="SELECT dni, nombre, contrasena FROM `medicos` WHERE dni='$u' AND contrasena='$c'";
//ejecuto la consulta
$resultado=mysqli_query($conexion,$sql);
//extraer datos de $resultado
$fila=mysqli_fetch_array($resultado);

echo $u;
echo "<br>";
echo $c;
echo "<br>";
//valido usr y contra
echo $fila['dni'];
echo "<br>";
echo $fila['contrasena'];
if($fila['dni']==$u and $fila['contrasena']==$c)
{
	session_start();
	$_SESSION['dni']=$u;
	$nom = substr($fila['nombre'], 0, strpos($fila['nombre'], " "));
	//$nom=$_SESSION['nombre'];
	header('Location: ../medico/adminlte/');
	exit();
}
else
{
	echo "Usuario y/o contraseñas incorrectos";
	echo "<a href='loginMed.php'>Intetar otra vez</a>";
}
mysqli_close($conexion);

?>