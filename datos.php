<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>
        #misT a{
            text-decoration: none;
            color: black;
        }
    </style>
    <script>
        function validar() {
            let pass = document.getElementById('psw').value;
            let passRep = document.getElementById('rpsw').value;

            if (pass === passRep) {
                return true;
            }
            else {
                document.getElementById('error').innerHTML='Las contrasenas no coinciden';
                return false;
            }
        }
</script>
</head>
<body background="imagenes/Fondo1.jpg">
<?php
session_start();
$dni = $_SESSION['dni'];
include 'database/conexion.php';
$sql = "SELECT * FROM `usuarios` WHERE `dni` = $dni";
$resu = mysqli_query($conexion, $sql);
$fila = mysqli_fetch_array($resu);
?>
<a id="atras" href="turnero.php"><button  class="btn btn-primary position-absolute top-0 start-0" ><i class="bi bi-arrow-left"></i> Volver</button></a>

<div class="position-absolute top-50 start-50 translate-middle border border-dark" style="background-color: white;">
    <form action="admin/actualizarUser.php" method="POST">
        <h1>Usuario activo:</h1>
        <p class="text text-center">Nombre:</p>
        <?php echo "<input type='text' name='nombre' class='position-relative start-50 translate-middle' value='$fila[nombre]'>"?><br>
        <p class="text text-center">Apellido:</p>
        <?php echo "<input type='text' name='apellido' class='position-relative start-50 translate-middle' value='$fila[apellido]'>"?><br>
        <p class="text text-center">Correo:</p>
        <?php echo "<input type='text' name='correo' class='position-relative start-50 translate-middle' value='$fila[correo]'>"?><br>
        <p class="text text-center">Teléfono:</p>
        <?php echo "<input type='text' name='telefono' class='position-relative start-50 translate-middle' value='$fila[telefono]'>"?><br>
        <p class="text text-center">Nueva contraseña:</p>
        <input type='password' name='psw' id="psw" class="position-relative start-50 translate-middle">><br>
        <p class="text text-center">Repetir contraseña:</p>
        <input type='password' id="rpsw" class="position-relative start-50 translate-middle"><br><br>
        <input type="submit" class="btn btn-success position-relative start-50 translate-middle" value="Actualizar usuario">
    </form>
</div>
</body>
</html>
