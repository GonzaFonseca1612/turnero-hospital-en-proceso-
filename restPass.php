<!DOCTYPE html>
<html>
<head>
	<title>
		Indalo Clinica
	</title>

	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
<header>
			<a href="../login" class="volver"><img src="" width="120" height="50"></a>
			
</header>

<?php

include "database/conexion.php";

session_start();		

$codigo= rand(1000,9999);
$tok = $codigo;
$codigo = md5($codigo);

//echo $tok;
//echo "<br>";
//echo $codigo;


$para = $_REQUEST['correo'];



$título = 'Recupere su contraseña de Indalo Clinica';
$mensaje = '
<html>
<head>
  <title>recupere su contraseña</title>
</head>
<body>
  <p>Este es su token:</p>
  <p> '.$tok.'</p>
 <p></p>

</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Enviarlo

$cabeceras .= "From: Indalo Clinica Dental <indaloclinica@gmail.com>\r\n";
 
mail($para, $título, $mensaje, $cabeceras);




        $sql = "UPDATE `usuarios` SET `contra`='$codigo' WHERE `correo` = '$para'";

        mysqli_query($conexion, $sql) or die ("Error");


        mysqli_close($conexion);

        header("Location: login.php?token=$tok");




?>

</body>
</html>