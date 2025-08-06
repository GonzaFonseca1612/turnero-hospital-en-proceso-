<?php
include '../database/conexion.php';
session_start();
$id = $_GET['id'];

$sql = "DELETE FROM `turnos` WHERE `id` = '$id'";
mysqli_query($conexion, $sql);
header("Location: misTurnos.php");
?>