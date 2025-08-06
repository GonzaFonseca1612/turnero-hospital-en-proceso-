<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ElDientito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        body {
            background-image: url(imagenes/Fondo1.jpg);
        }
        #btn1 a{
            text-decoration: none;
            color: black;
        }
        header {
            margin-left: 93%;
        }
        header #atras{
            margin-left: 0%;
        }
        #icon {
            color: black;
        }
        #misT a{
            text-decoration: none;
            color: black;
        }
    </style>
    <!--<script>
        function validarT() {
        const dias = ['lunes','martes','miércoles','jueves','viernes','sábado','domingo'];
        let fecha= document.getElementById('fecha').value;
        let now = new Date();
        let nowY = now.getFullYear();
        let nowM = now.getMonth();
        let nowD = now.getFullYear();
        let hoy = nowY + "-" + nowM + '-' + nowD;
        let numeroDia = new Date(fecha).getDay();
        
        let nombreDia = dias[numeroDia];
        if(fecha > now) {
            if(nombreDia == 'sábado' || nombreDia == 'domingo') {
                document.getElementById('error').innerHTML='No se puede reservar turnos los sabados o domingos';
                return false;
            }
        } else {
            document.getElementById('error').innerHTML='La fecha seleccionada es anterior a la actual';
            return false;
        }
        return true;
        
        }
    </script>-->
  </head>
  <body>
<?php
    session_start();

    $u=$_SESSION['dni'];
    //$nom=$_SESSION['nombre'];
    if (isset($u))
    {
        if(isset($_GET['error'])){
            $e = $_GET['error'];
            if($e = 'true') {
                echo "<h1 style='color:red;'>Este turno ya ha sido reservado</h1>";
            }
        }
        if(isset($_GET['find'])){
            $e = $_GET['find'];
            if($e = 'true') {
                echo "<h1 style='color:red;'>No puede reservar turno un sabado o domingo</h1>";
            }
        }
        if(isset($_GET['exp'])){
            $e = $_GET['exp'];
            if($e = 'true') {
                echo "<h1 style='color:red;'>Fecha expirada</h1>";
            }
        }
?>
<header>
    <a href="datos.php" id="icon"><img src="imagenes/person-circle.svg" height="40"></a>
    <a href="admin/cerrarSesion.php" id="icon"><img src="imagenes/person-fill-x.svg" height="40"></a>
    
    </header>
    <button class="btn btn-success position-absolute bottom-0 start-0 rounded-pill" id="misT" style="background-color: #00ff9c; border: 2px black solid;"><a href="admin/misTurnos.php">Mis turnos</a></button>
<form method="POST" action="admin/formulario.php">
    <div class="container text-center position-absolute top-50 start-50 translate-middle">
        <div class="row">
        <form method="POST" action="admin/formulario.php">
            <div class="col">
                <div class='card rounded-pill border-dark bg-transparent' style='width: 12rem; height: 19rem; border: none;'>
                        <img src='imagenes/Consulta.png' class='card-img-top' alt='...' height='180'>
                        <div class='card-body'>
                                <input type='hidden' name='id' value=1>
                                <h5 class='card-title' name='consulta'>Consulta</h5>
                                <input type="button" name="modal1" data-bs-toggle='modal' data-bs-target='#exampleModal1' value="Solicitar turno" class="btn rounded-pill" style="background-color: #00ff9c; border: 2px solid;">
                        </div>
                </div>  
            </div>
            <div class="col">
                <div class='card rounded-pill border-dark bg-transparent' style='width: 12rem; height: 19rem; border: none;'>
                        <img src='imagenes/Periodoncia.png' class='card-img-top' alt='...' height='180'>
                        <div class='card-body'>
                                <input type='hidden' name='id' value=2>
                                <h5 class='card-title' name='consulta'>Periodoncia</h5>
                                <input type="button" name="modal2" data-bs-toggle='modal' data-bs-target='#exampleModal2' value="Solicitar turno" class="btn rounded-pill" style="background-color: #00ff9c; border: 2px solid;">
                        </div>
                </div>
            </div>
            <div class="col">
                <div class='card rounded-pill border-dark bg-transparent' style='width: 12rem; height: 19rem; border: none;'>
                        <img src='imagenes/Prostodoncia.png' class='card-img-top' alt='...' height='180'>
                        <div class='card-body'>
                                <input type='hidden' name='id' value=3>
                                <h5 class='card-title' name='consulta'>Prostodoncia</h5>
                                <input type="button" name="modal3" data-bs-toggle='modal' data-bs-target='#exampleModal3' value="Solicitar turno" class="btn rounded-pill" style="background-color: #00ff9c; border: 2px solid;">
                        </div>
                </div>
            </div>
            <div class="col">
                <div class='card rounded-pill border-dark bg-transparent' style='width: 12rem; height: 19rem; border: none;'>
                        <img src='imagenes/Odontopediatria.png' class='card-img-top' alt='...' height='180'>
                        <div class='card-body'>
                                <input type='hidden' name='id' value=4>
                                <h5 class='card-title' name='consulta'>Odontopediatria</h5>
                                <input type="button" name="modal4" data-bs-toggle='modal' data-bs-target='#exampleModal4' value="Solicitar turno" class="btn rounded-pill" style="background-color: #00ff9c; border: 2px solid;">
                        </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</form>



        <?php        
        
    }
    else
    {
        echo "<h5>Usuario no logueado<a href='login.php'>[iniciar sesión]</a></h5><hr>";
    }


?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
<!-- Modal Consulta-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Solicitar Turno</h3>
            </div>
        <div class="modal-body">
        <form id="appointment_form" class="py-2" method="POST" action="admin/guardarTurno.php">
            
            <h5>Complete los siguientes campos</h5>
    <div class="row" id="appointment">
        <div class="col-6" id="frm-field">
            
            <div class="form-group">
            <label for="medico" class="control-label">Medico</label>
                    <?php
                    include 'database/conexion.php';

                    $sql = $consulta = "SELECT * FROM medicos WHERE id_especialidad = '1';";
                    $resu=mysqli_query($conexion,$sql);
                    echo "<select class='form-control' name='medico' required>";
                    echo "<option>---Seleccione un medico---</option>";
                    while ($fila=mysqli_fetch_array($resu)) {
                        echo "<option value=$fila[dni]>$fila[nombre] $fila[apellido]</option>";
                    }
                    echo "</select>";
                    mysqli_close($conexion);
                ?>
            </div>
                <div class="form-group">
                <label for="mutual" class="control-label">Obra social</label>
                <?php
                    include 'database/conexion.php';

                    $sql = $consulta = "SELECT * FROM mutuales;";
                    $resu=mysqli_query($conexion,$sql);
                    echo "<select class='form-control' name='mutual' required>";
                    echo "<option>---Seleccione una mutual---</option>";
                    while ($fila=mysqli_fetch_array($resu)) {
                        echo "<option value=$fila[mutual]>$fila[mutual]</option>";
                    }
                    echo "</select>";
                    mysqli_close($conexion);
                ?>
                </div>
                <div class="form-group">
                    <label for="sintomas" class="control-label">Sintomas</label>
                    <textarea style="height: 34px; " name="sintomas"></textarea>
                </div>
        </div>
        <div class="col-6">
            
                <div class="form-group">
                    <label for="date_sched" class="control-label">Fecha Cita</label>
                    <input type="date" class="form-control" name="date_schded" value="">
                </div>
                <div class="form-group">
                    <label for="date_sched" class="control-label">Hora Cita</label>
                <?php

include 'database/conexion.php';
$sql = "SELECT `dni`,`turno_dia`, `turno_tarde`, `dias` FROM `medicos` WHERE `dni` = '30659875'";
$resu = mysqli_query($conexion, $sql);
//guardo los datos
$rows = mysqli_fetch_array($resu);
        $morning_start =  explode(',',$rows[1])[0] . "<br>";
        $morning_end = explode(',',$rows[1])[1] . "<br>";
        $afternoon_start = explode(',',$rows[2])[0] . "<br>";
        $afternoon_end = explode(',',$rows[2])[1] . "<br>";

//cambio el formato y proceso de agregar minutos
        $morning_start = substr($morning_start, 0, 5);
        $morning_end = substr($morning_end, 0, 5);
        $afternoon_start = substr($afternoon_start, 0, 5);
        $afternoon_end = substr($afternoon_end, 0, 5);
        $addMinutes = 30;
            $hora = $morning_start;
            $horaT = $afternoon_start;
            echo "<select name='hora' class='form-control'>";
            echo "<option>---Seleccione una hora---<option>";
            echo "<option value='$hora'>$hora<option>";
            while($hora >= $morning_start && $hora < $morning_end) {
                $segundos_horaInicial=strtotime($hora);
                $segundos_minutoAnadir=$addMinutes*60;
                
                $hora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);

                echo "<option value='$hora'>$hora<option>";
                
            }
            echo "<option value='$horaT'>$horaT<option>";
            while($horaT >= $afternoon_start && $horaT < $afternoon_end) {


                $segundos_horaInicialT=strtotime($horaT);
                $segundos_minutoAnadirT=$addMinutes*60;
                

                $horaT=date("H:i",$segundos_horaInicialT+$segundos_minutoAnadirT);
                

                echo "<option value='$horaT'>$horaT<option>";
                
            }
            echo "</select>";
        ?>
                </div>
                <p style="color: red;" id="error"></p>
        </div>
        </div>

        <br>
            <div class="form-group d-flex justify-content-end w-100 form-group">
                <button class="btn btn-success" type="submit" onclick="return validarT()">Enviar cita</button>
                <button class="btn btn-danger" type="button" data-bs-dismiss="modal" aria-label="close">Cancelar</button>
            </div>
    </div>
    </form>
    </div>
        </div>
    </div>
</div>

<!-- Modal Periodoncia-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Solicitar Turno</h3>
            </div>
        <div class="modal-body">
        <form id="appointment_form" class="py-2" method="POST" action="admin/guardarTurno.php">
            
            <h5>Complete los siguientes campos</h5>
    <div class="row" id="appointment">
        <div class="col-6" id="frm-field">
            
            <div class="form-group">
            <label for="medico" class="control-label">Medico</label>
                    <?php
                    include 'database/conexion.php';

                    $sql = $consulta = "SELECT * FROM medicos WHERE id_especialidad = '2';";
                    $resu=mysqli_query($conexion,$sql);
                    echo "<select class='form-control' name='medico' required>";
                    echo "<option>---Seleccione un medico---</option>";
                    while ($fila=mysqli_fetch_array($resu)) {
                        echo "<option value='$fila[dni]'>$fila[nombre] $fila[apellido]</option>";
                    }
                    echo "</select>";
                    mysqli_close($conexion);
                ?>
            </div>
                <div class="form-group">
                <label for="mutual" class="control-label">Obra social</label>
                <?php
                    include 'database/conexion.php';

                    $sql = $consulta = "SELECT * FROM mutuales;";
                    $resu=mysqli_query($conexion,$sql);
                    echo "<select class='form-control' name='mutual' required>";
                    echo "<option>---Seleccione una mutual---</option>";
                    while ($fila=mysqli_fetch_array($resu)) {
                        echo "<option value='$fila[mutual]'>$fila[mutual]</option>";
                    }
                    echo "</select>";
                    mysqli_close($conexion);
                ?>
                </div>
                <div class="form-group">
                    <label for="sintomas" class="control-label">Sintomas</label>
                    <textarea style="height: 34px; " name="sintomas"></textarea>
                </div>
        </div>
        <div class="col-6">
            
                <div class="form-group">
                    <label for="date_sched" class="control-label">Fecha Cita</label>
                    <input type="date" class="form-control" name="date_schded" value="" id="fecha">
                </div>
                <div class="form-group">
                    <label for="date_sched" class="control-label">Hora Cita</label>
                <?php

include 'database/conexion.php';
$sql = "SELECT `dni`,`turno_dia`, `turno_tarde`, `dias` FROM `medicos` WHERE `dni` = '35246123'";
$resu = mysqli_query($conexion, $sql);
//guardo los datos
$rows = mysqli_fetch_array($resu);
        $morning_start =  explode(',',$rows[1])[0] . "<br>";
        $morning_end = explode(',',$rows[1])[1] . "<br>";
        $afternoon_start = explode(',',$rows[2])[0] . "<br>";
        $afternoon_end = explode(',',$rows[2])[1] . "<br>";

//cambio el formato y proceso de agregar minutos
        $morning_start = substr($morning_start, 0, 5);
        $morning_end = substr($morning_end, 0, 5);
        $afternoon_start = substr($afternoon_start, 0, 5);
        $afternoon_end = substr($afternoon_end, 0, 5);
        $addMinutes = 30;
            $hora = $morning_start;
            $horaT = $afternoon_start;
            echo "<select name='hora' class='form-control'>";
            echo "<option>---Seleccione una hora---<option>";
            echo "<option value='$hora'>$hora<option>";
            while($hora >= $morning_start && $hora < $morning_end) {
                $segundos_horaInicial=strtotime($hora);
                $segundos_minutoAnadir=$addMinutes*60;
                
                $hora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);

                echo "<option value='$hora'>$hora<option>";
                
            }
            echo "<option value='$horaT'>$horaT<option>";
            while($horaT >= $afternoon_start && $horaT < $afternoon_end) {


                $segundos_horaInicialT=strtotime($horaT);
                $segundos_minutoAnadirT=$addMinutes*60;
                

                $horaT=date("H:i",$segundos_horaInicialT+$segundos_minutoAnadirT);
                

                echo "<option value='$horaT'>$horaT<option>";
                
            }
            echo "</select>";
        ?>
        <p style="color: red;" id="error"></p>
                </div>
        </div>

        <br>
            <div class="form-group d-flex justify-content-end w-100 form-group">
                <button class="btn btn-success" type="submit" onclick="return validarT()">Enviar cita</button>
                <button class="btn btn-danger" type="button" data-bs-dismiss="modal" aria-label="close">Cancelar</button>
            </div>
    </div>
    </form>
    </div>
        </div>
    </div>
</div>

<!-- Modal Prostodoncia-->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Solicitar Turno</h3>
            </div>
        <div class="modal-body">
        <form id="appointment_form" class="py-2" method="POST" action="admin/guardarTurno.php">
            
            <h5>Complete los siguientes campos</h5>
    <div class="row" id="appointment">
        <div class="col-6" id="frm-field">
            
            <div class="form-group">
            <label for="medico" class="control-label">Medico</label>
                    <?php
                    include 'database/conexion.php';

                    $sql = $consulta = "SELECT * FROM medicos WHERE id_especialidad = '3';";
                    $resu=mysqli_query($conexion,$sql);
                    echo "<select class='form-control' name='medico' required>";
                    echo "<option>---Seleccione un medico---</option>";
                    while ($fila=mysqli_fetch_array($resu)) {
                        echo "<option value='$fila[dni]'>$fila[nombre] $fila[apellido]</option>";
                    }
                    echo "</select>";
                    mysqli_close($conexion);
                ?>
            </div>
                <div class="form-group">
                <label for="mutual" class="control-label">Obra social</label>
                <?php
                    include 'database/conexion.php';

                    $sql = $consulta = "SELECT * FROM mutuales;";
                    $resu=mysqli_query($conexion,$sql);
                    echo "<select class='form-control' name='mutual' required>";
                    echo "<option>---Seleccione una mutual---</option>";
                    while ($fila=mysqli_fetch_array($resu)) {
                        echo "<option value='$fila[mutual]'>$fila[mutual]</option>";
                    }
                    echo "</select>";
                    mysqli_close($conexion);
                ?>
                </div>
                <div class="form-group">
                    <label for="sintomas" class="control-label">Sintomas</label>
                    <textarea style="height: 34px; " name="sintomas"></textarea>
                </div>
        </div>
        <div class="col-6">
            
                <div class="form-group">
                    <label for="date_sched" class="control-label">Fecha Cita</label>
                    <input type="date" class="form-control" name="date_schded" value="">
                </div>
                <div class="form-group">
                    <label for="date_sched" class="control-label">Hora Cita</label>
                <?php

include 'database/conexion.php';
$sql = "SELECT `dni`,`turno_dia`, `turno_tarde`, `dias` FROM `medicos` WHERE `dni` = '30659875'";
$resu = mysqli_query($conexion, $sql);
//guardo los datos
$rows = mysqli_fetch_array($resu);
        $morning_start =  explode(',',$rows[1])[0] . "<br>";
        $morning_end = explode(',',$rows[1])[1] . "<br>";
        $afternoon_start = explode(',',$rows[2])[0] . "<br>";
        $afternoon_end = explode(',',$rows[2])[1] . "<br>";

//cambio el formato y proceso de agregar minutos
        $morning_start = substr($morning_start, 0, 5);
        $morning_end = substr($morning_end, 0, 5);
        $afternoon_start = substr($afternoon_start, 0, 5);
        $afternoon_end = substr($afternoon_end, 0, 5);
        $addMinutes = 30;
            $hora = $morning_start;
            $horaT = $afternoon_start;
            echo "<select name='hora' class='form-control'>";
            echo "<option>---Seleccione una hora---<option>";
            echo "<option value='$hora'>$hora<option>";
            while($hora >= $morning_start && $hora < $morning_end) {
                $segundos_horaInicial=strtotime($hora);
                $segundos_minutoAnadir=$addMinutes*60;
                
                $hora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);

                echo "<option value='$hora'>$hora<option>";
                
            }
            echo "<option value='$horaT'>$horaT<option>";
            while($horaT >= $afternoon_start && $horaT < $afternoon_end) {


                $segundos_horaInicialT=strtotime($horaT);
                $segundos_minutoAnadirT=$addMinutes*60;
                

                $horaT=date("H:i",$segundos_horaInicialT+$segundos_minutoAnadirT);
                

                echo "<option value='$horaT'>$horaT<option>";
                
            }
            echo "</select>";
        ?>
                </div>
        </div>
        </div>

        <br>
            <div class="form-group d-flex justify-content-end w-100 form-group">
                <button class="btn btn-success" type="submit" onclick="return validarT()">Enviar cita</button>
                <button class="btn btn-danger" type="button" data-bs-dismiss="modal" aria-label="close">Cancelar</button>
            </div>
    </div>
    </form>
    </div>
        </div>
    </div>
</div>

<!-- Modal Odontopediatria-->
<div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Solicitar Turno</h3>
            </div>
        <div class="modal-body">
        <form id="appointment_form" class="py-2" method="POST" action="admin/guardarTurno.php">
            
            <h5>Complete los siguientes campos</h5>
    <div class="row" id="appointment">
        <div class="col-6" id="frm-field">
            
            <div class="form-group">
            <label for="medico" class="control-label">Medico</label>
                    <?php
                    include 'database/conexion.php';

                    $sql = $consulta = "SELECT * FROM medicos WHERE id_especialidad = '4';";
                    $resu=mysqli_query($conexion,$sql);
                    echo "<select class='form-control' name='medico' required>";
                    echo "<option>---Seleccione un medico---</option>";
                    while ($fila=mysqli_fetch_array($resu)) {
                        echo "<option value='$fila[dni]'>$fila[nombre] $fila[apellido]</option>";
                    }
                    echo "</select>";
                    mysqli_close($conexion);
                ?>
                <p style="color: red;" id="error"></p>
            </div>
                <div class="form-group">
                <label for="mutual" class="control-label">Obra social</label>
                <?php
                    include 'database/conexion.php';

                    $sql = $consulta = "SELECT * FROM mutuales;";
                    $resu=mysqli_query($conexion,$sql);
                    echo "<select class='form-control' name='mutual' required>";
                    echo "<option>---Seleccione una mutual---</option>";
                    while ($fila=mysqli_fetch_array($resu)) {
                        echo "<option value='$fila[mutual]'>$fila[mutual]</option>";
                    }
                    echo "</select>";
                    mysqli_close($conexion);
                ?>
                </div>
                <div class="form-group">
                    <label for="sintomas" class="control-label">Sintomas</label>
                    <textarea style="height: 34px; " name="sintomas"></textarea>
                </div>
        </div>
        <div class="col-6">
            
                <div class="form-group">
                    <label for="date_sched" class="control-label">Fecha Cita</label>
                    <input type="date" class="form-control" name="date_schded" value="">
                </div>
                <div class="form-group">
                    <label for="date_sched" class="control-label">Hora Cita</label>
                <?php

include 'database/conexion.php';
$sql = "SELECT `dni`,`turno_dia`, `turno_tarde`, `dias` FROM `medicos` WHERE `dni` = '30659875'";
$resu = mysqli_query($conexion, $sql);
//guardo los datos
$rows = mysqli_fetch_array($resu);
        $morning_start =  explode(',',$rows[1])[0] . "<br>";
        $morning_end = explode(',',$rows[1])[1] . "<br>";
        $afternoon_start = explode(',',$rows[2])[0] . "<br>";
        $afternoon_end = explode(',',$rows[2])[1] . "<br>";

//cambio el formato y proceso de agregar minutos
        $morning_start = substr($morning_start, 0, 5);
        $morning_end = substr($morning_end, 0, 5);
        $afternoon_start = substr($afternoon_start, 0, 5);
        $afternoon_end = substr($afternoon_end, 0, 5);
        $addMinutes = 30;
            $hora = $morning_start;
            $horaT = $afternoon_start;
            echo "<select name='hora' class='form-control'>";
            echo "<option>---Seleccione una hora---<option>";
            echo "<option value='$hora'>$hora<option>";
            while($hora >= $morning_start && $hora < $morning_end) {
                $segundos_horaInicial=strtotime($hora);
                $segundos_minutoAnadir=$addMinutes*60;
                
                $hora=date("H:i",$segundos_horaInicial+$segundos_minutoAnadir);

                echo "<option value='$hora'>$hora<option>";
                
            }
            echo "<option value='$horaT'>$horaT<option>";
            while($horaT >= $afternoon_start && $horaT < $afternoon_end) {


                $segundos_horaInicialT=strtotime($horaT);
                $segundos_minutoAnadirT=$addMinutes*60;
                

                $horaT=date("H:i",$segundos_horaInicialT+$segundos_minutoAnadirT);
                

                echo "<option value='$horaT'>$horaT<option>";
                
            }
            echo "</select>";
        ?>
        <p style="color: red;" id="error"></p>
                </div>
        </div>
        </div>

        <br>
            <div class="form-group d-flex justify-content-end w-100 form-group">
                <button class="btn btn-success" type="submit" onclick="return validarT()">Enviar cita</button>
                <button class="btn btn-danger" type="button" data-bs-dismiss="modal" aria-label="close">Cancelar</button>
            </div>
    </div>
    </form>
    </div>
        </div>
    </div>
</div>
