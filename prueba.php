
<?php

include 'database/conexion.php';
$now = date('Y-m-d');
$fechaT = strtotime('2022-10-01');
if($fechaT > $now) {
    echo "Turno reservado";
} else {
    echo "Fecha expirada";
}

/*$sql = "SELECT `dni`,`turno_dia`, `turno_tarde`, `dias` FROM `medicos` WHERE `dni` = '30659875'";
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
            echo "<select name='turno'>";
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
            echo "</select>";*/
        ?>
