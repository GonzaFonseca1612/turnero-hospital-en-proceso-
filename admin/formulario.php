<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ElDientito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <?php
    session_start();

    $u=$_SESSION['dni'];
    //$nom=$_SESSION['nombre'];
    if (isset($u))
    {
        echo "<h5>Usuario activo: ".$u . "<a href='cerrarSesion.php'>[cerrar sesión]</a></h5><hr>";
    }
?>

<?php
    
    if(isset($_REQUEST['modal1'])) {
        echo "<a href='#' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal1' name='modal1'>Solicitar turno</a>";
        
    }
    if(isset($_REQUEST['modal2'])) {
        echo "<a href='#' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal1' name='modal2'>Solicitar turno</a>";
    }
    if(isset($_REQUEST['modal3'])) {
        echo "<a href='#' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal1' name='modal3'>Solicitar turno</a>";
    }
    if(isset($_REQUEST['modal4'])) {
        echo "<a href='#' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal1' name='modal4'>Solicitar turno</a>";
    }

?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
<!-- Modal 1-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Solicitar Turno aa</h3>
            </div>
        <div class="modal-body">
        <form id="appointment_form" class="py-2" method="POST" action="guardarTurno.php">
            
            <h5>Complete los siguientes campos</h5>
    <div class="row" id="appointment">
        <div class="col-6" id="frm-field">
            
            <div class="form-group">
            <label for="medico" class="control-label">Medico</label>
                    <?php
                    include '../database/conexion.php';

                    $sql = $consulta = "SELECT * FROM medicos;";
                    $resu=mysqli_query($conexion,$sql);
                    echo "<select class='form-control' name='medico' required>";
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
                    include '../database/conexion.php';

                    $sql = $consulta = "SELECT * FROM mutuales;";
                    $resu=mysqli_query($conexion,$sql);
                    echo "<select class='form-control' name='mutual' required>";
                    while ($fila=mysqli_fetch_array($resu)) {
                        echo "<option value=$fila[dni]>$fila[mutual]</option>";
                    }
                    echo "</select>";
                    mysqli_close($conexion);
                ?>
                </div>
        </div>
        <div class="col-6">
            
                <div class="form-group">
                    <label for="date_sched" class="control-label">Fecha Cita</label>
                    <input type="datetime-local" class="form-control" name="date_schded" value="">
                </div>
                <div class="form-group">
                    <label for="sintomas" class="control-label">Sintomas</label>
                    <textarea style="height: 34px; " name="sintomas"></textarea>
                </div>
        </div>

        <br>
            <div class="form-group d-flex justify-content-end w-100 form-group">
                <button class="btn btn-success" type="submit">Enviar cita</button>
                <button class="btn btn-danger" type="button" data-bs-dismiss="modal" aria-label="close">Cancelar</button>
            </div>
    </div>
    </form>
    </div>
        </div>
    </div>
</div>
