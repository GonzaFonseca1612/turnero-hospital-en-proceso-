<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/main.css">
    <link rel="stylesheet" href="../src/login.css">
    
</head>
<body>
<script>
        function validar() {
            let pass = document.getElementById('pass').value;
            let passRep = document.getElementById('passRep').value;

            if (pass === passRep) {
                return true;
            }
            else {
                document.getElementById('error').innerHTML='Las contrasenas no coinciden';
                return false;
            }
        }
</script>
        <div class="login-container">
            <div class="login-info-container">
                <img src="">
                <h1 class="title">Formulario de alta nuevo Medico</h1>
                <p>Ingrese los datos para crear un nuevo usuario</p>
                <form class="inputs-container" action="crearMedico.php" method="POST">
                    <?php
                        include '../database/conexion.php';

                        $sql = $consulta = "SELECT * FROM `especialidades`;";
                        $resu=mysqli_query($conexion,$sql);
                        echo "<select class='input' name='especialidad' required>";
                        while ($fila=mysqli_fetch_array($resu)) {
                            echo "<option value=$fila[id]>$fila[especialidad]</option>";
                        }
                        echo "</select>";
                        mysqli_close($conexion);
                    ?>
                    <input class="input" type="text" placeholder="DNI" name="dni" required>
                    <input class="input" type="text" placeholder="Nombre/s" name="nombre" required>
                    <input class="input" type="text" placeholder="Apellido/s" name="apellido" required>
                    <input class="input" type="text" placeholder="Horario turno manana" name="turnoM" required>
                    <input class="input" type="text" placeholder="Horario turno tarde" name="turnoT" required>
                    <input class="input" type="text" placeholder="Dias laborales" name="diasLab" required>
                    <input class="input" type="email" placeholder="correo electronico" name="correo" required>              
                    <input class="input" type="password" placeholder="contrasena" name="contra" id="pass" required>
                    <input class="input" type="password" placeholder="repetir contrasena" id="passRep" required>
                    <p style="color: red;" id="error"></p>
                    <button class="btn" type="submit" onclick="return validar()">Registrar</button>
                    <a aria-current="page" href="index.php">Volver al inicio</a>
                </form>
            </div>
        </div>
</body>
</body>
</html>