<?php
session_start();
include '../database/conexion.php';
$dni = $_SESSION['dni'];

$nombre = $_REQUEST['nombre'];
$apellido = $_REQUEST['apellido'];
$correo = $_REQUEST['correo'];
$telefono = $_REQUEST['telefono'];
$contra = md5($_REQUEST['psw']);
if($contra == "") {
    $sql = "UPDATE `usuarios` SET `nombre`='$nombre',`apellido`='$apellido',`correo`='$correo',`telefono`='$telefono' WHERE dni = '$dni'";
    mysqli_query($conexion, $sql);
} else {
    $sql = "UPDATE `usuarios` SET `nombre`='$nombre',`apellido`='$apellido',`correo`='$correo',`telefono`='$telefono', `contra`='$contra' WHERE dni = '$dni'";
    mysqli_query($conexion, $sql);
}

header("Location: ../turnero.php");
?>