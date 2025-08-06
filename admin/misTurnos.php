<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<style>
    #atras{
        color: black;
        text-decoration: none;
    }
</style>
  </head>
</head>
<body background="../imagenes/Fondo1.jpg">
<?php
    include '../database/conexion.php';
    session_start();
    $dni = $_SESSION['dni'];

    $sql = "SELECT * FROM `turnos` WHERE `title` = '$dni'";
    $resu = mysqli_query($conexion, $sql);
    


?>

<a id="atras" href="../turnero.php"><button  class="btn btn-primary" ><i class="bi bi-arrow-left"></i> Volver</button></a>

<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Medico</th>
      <th scope="col">Sintomas</th>
      <th scope="col">Fecha</th>
      <th scope="col">Cancelar turno</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($fila = mysqli_fetch_array($resu)) {
    $query = "SELECT `nombre`, `apellido` FROM `medicos` WHERE `dni` = '$fila[dni]'";
    $resultado = mysqli_query($conexion, $query);
    $campo = mysqli_fetch_array($resultado);
    echo "<tr>";
    echo "<th scope='row'>$campo[nombre] $campo[apellido]</th>";
    echo "<td>$fila[sintomas]</td>";
    echo "<td>$fila[start]</td>";
    echo "<td><a href='cancelarTurno.php?id=$fila[id]'><i class='bi bi-x-lg'></i></a></td>";
    echo "</tr>";
    }
    ?>
  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>