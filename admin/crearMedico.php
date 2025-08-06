<?php

    include '../database/conexion.php';

    $id_especialidad = $_REQUEST['especialidad'];
    $dni = $_REQUEST['dni'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $tm = $_REQUEST['turnoM'];
    $tt = $_REQUEST['turnoT'];
    $dias = $_REQUEST['diasLab'];
    $correo = $_REQUEST['correo'];
    $contra = $_REQUEST['contra'];
    

    $query = "INSERT INTO `medicos` (`id_especialidad`, `dni`, `nombre`, `apellido`, `correo`, `contrasena`, `turno_dia`, `turno_tarde`, `dias`) VALUES ('$id_especialidad', '$dni', '$nombre', '$apellido', '$correo', '$contra', '$tm', '$tt, '$dias')";
    //$query = "INSERT INTO `medicos` (`id_especialidad`, `dni`, `nombre`, `apellido`, `correo`, `contrasena`, `turno_dia`, `turno_tarde`, `dias`) VALUES ('$id_especialidad', '$dni', '$nombre', '$apellido', '$correo', '$contra', '$tm', '$tt, '$dias')";
    $resultado = mysqli_query($conexion, $query);

    header("location: registrarMedico.php");
    mysqli_close($conexion);

?>
