<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="src/login.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
          <style>
            .title{font-family: ''Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif';}
            .span{color: #000033;}
            a{text-decoration: none;}
            .btn{background-color: #000033;}
            #contenedor{background-color: whitesmoke;}
          </style>
</head>
<body background="../Turnero2/imagenes/Fondo1.jpg">
        <div class="login-container position-absolute top-50 start-50 translate-middle">
            <div class="login-info-container border border-3 rounded-5 border-dark" id="contenedor">
                <br>
                <img src="../Turnero2/imagenes/Logo 2.png" height="200px" width="400px">
                <p style="font-family:''Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif';">Complete sus datos de acceso para ingresar</p>
                <form class="inputs-container" action="admin/validarUsr.php" method="POST">
                    <input class="input border border-dark border-2" type="text" placeholder="DNI" name="dni" required>
                    <input class="input border border-dark border-2" type="password" placeholder=Contraseña name="psw" required>
                    <?php
                    if(isset($_GET['token'])) {
                    $token = $_GET['token'];
                    echo "<p>Su token de inicio de sesion es: <span style='font-weight:bold; color: blue;'>$token</span></p>";
                    }
                    ?>
                    <p style="font-family:''Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif';">¿Olvidaste tu contraseña? <span class="span"><a href="recuperarContra.html">Recuperar contraseña</a></span></p>
                    <button class="btn" type="submit" name="login">Ingresar</button>
                    <p style="font-family:''Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif';"> No tienes una cuenta aun? <span class="span"><a href="registro.php" class="span">Registrate</a></span></p>
                </form>
            </div>
        </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    -->
</body> 
</html>