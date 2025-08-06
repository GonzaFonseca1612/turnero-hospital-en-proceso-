<?php
    session_start();

    
    $u=$_SESSION['dni'];
    $para = $_SESSION['email'];
    

    include '../database/conexion.php';

    $medico = $_REQUEST['medico'];
    $mutual = $_REQUEST['mutual'];
    $start = $_POST['date_schded'];
    $sintomas = $_REQUEST['sintomas'];
    $hora = $_REQUEST['hora'];

    $fecha = $start . " ". $hora;
    $dia = date("l", strtotime($start));

    $query = "SELECT `dni`, `start` FROM `turnos` WHERE `dni` = '$medico' AND `start` = '$fecha';";
    $validar = mysqli_query($conexion, $query);
    $filas = mysqli_num_rows($validar);
    
    $now = date('Y-m-d');
    $fechaT = date('Y-m-d',strtotime($start));
    if($fechaT >= $now) {
        if($dia == 'Saturday' || $dia == 'Sunday') {
            header("Location: ../turnero.php?find=true");
        }
        if($filas > 0) {
            //echo "Este turno ya ha sido reservado";
            header("Location: ../turnero.php?error=true");
        }
        else {
            $sql = "INSERT INTO `turnos`(`title`, `dni`, `id_mutual`, `sintomas`, `start`) VALUES ('$u', '$medico','$mutual','$sintomas','$fecha');";
            mysqli_query($conexion,$sql);
            $título = 'Recupere su contraseña de Indalo Clinica';
            $mensaje = '
            <html>
            <head>
            <title>Turno reservado</title>
            </head>
            <body>
            <p>Su turno ha sido registrado para la fecha: '.$fecha.'</p>
            <p> ¡Lo esperamos!</p>
            <p>Indalo Clinica Dental</p>

            </body>
            </html>
            ';

            $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
            $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

            // Enviarlo

            $cabeceras .= "From: Indalo Clinica Dental <indaloclinica@gmail.com>\r\n";
            
            mail($para, $título, $mensaje, $cabeceras);
            header("Location: ../reservado.html");

            
        }
    } else {
        header("Location: ../turnero.php?exp=true");
    }

    
    
    mysqli_close($conexion);
?>
