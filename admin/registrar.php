<?php
    include '../database/conexion.php';

    $dni = $_REQUEST['dni'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $correo = $_REQUEST['correo'];
    $contra = md5($_REQUEST['contra']);
    $telefono = $_REQUEST['telefono'];
    $fecha = $_REQUEST['edad'];
    

    $query = "INSERT INTO `usuarios`(`dni`, `nombre`, `apellido`, `correo`, `telefono`, `contra`, `fecha_nacimiento`) VALUES ('$dni','$nombre','$apellido','$correo','$telefono', '$contra', '$fecha')";
    $resultado = mysqli_query($conexion, $query);

    header("location: ../login.php");
    mysqli_close($conexion);
?>
