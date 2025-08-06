<?php
session_start();

$u=$_SESSION['dni'];
$date = date('Y-m-d');

//$nom=$_SESSION['nombre'];
if (isset($u))
{
    header('content-type: application/Json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    $pdo = new PDO("mysql:dbname=pruebas eventos;host=127.0.0.1","root","");
    $sentenciaSQL = $pdo->prepare("SELECT * FROM `turnos` WHERE `dni` = '$u' AND `start` >= '$date'");
    $sentenciaSQL->execute();

    $resultado = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($resultado); 
}
else
{
    echo "<h5>Usuario no logueado<a href='loginMed.php'>[iniciar sesión]</a></h5><hr>";
}

?>  
