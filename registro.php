<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/main.css">
    <link rel="stylesheet" href="src/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="src/login.css">
    <style>
            .title{font-family: 'Crimson Pro'; color: #000033;}
            .span{color: #000033; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;}
            a{text-decoration: none;}
            .btn{background-color: #000033;}
            #contenedor{background-color: whitesmoke;}
            #term a {
                color: black;
            }
            #term a span {
                color: blue;
                font-weight: bold;
            }
        </style>
</head>
<body background="../Turnero2/imagenes/Fondo1.jpg">
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
        <div class="login-container position-absolute top-50 start-50 translate-middle">
            <div class="login-info-container border border-3 rounded-5 border-dark" id="contenedor">
            <img src="../Turnero2/imagenes/Logo 2.png" height="180px" width="360px">
                <h1 class="span">Formulario de registro</h1>
                <p>Ingrese sus datos para crear su cuenta</p>
                <form class="inputs-container" action="admin/registrar.php" method="POST">
                    <input class="input border border-dark border-2" type="text" placeholder="DNI" name="dni" required>
                    <input class="input border border-dark border-2" type="text" placeholder="Nombre/s" name="nombre" required>
                    <input class="input border border-dark border-2" type="text" placeholder="Apellido/s" name="apellido" required>
                    <input class="input border border-dark border-2" type="text" placeholder="Telefono" name="telefono" required>
                    <input class="input border border-dark border-2" type="text" placeholder="Correo Electronico" name="correo" required>
                    <input class="input border border-dark border-2" type="date" name="edad" id="date" required>              
                    <input class="input border border-dark border-2" type="password" placeholder="Contraseña" name="contra" id="pass" required>
                    <input class="input border border-dark border-2" type="password" placeholder="Repetir Contraseña" id="passRep" required>
                    <p id="term"><input type="checkbox" id="check" value="check" required> Acepto los <button style="border: none;" data-bs-toggle="modal" data-bs-target="#exampleModal"><a><span>Terminos y condiciones</span></a></button><p>
                    <p style="color: red;" id="error"></p>
                    <button class="btn" type="submit" onclick="return validar()">Registrarse</button>
                    <a aria-current="page" href="index.php" class="span">Volver al inicio</a>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</body>
</html>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Terminos y condiciones</h1>
        <button type="button" class="btn-close position-absolute start-0" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h2 style="text-align: center;"><strong>POLÍTICA DE PRIVACIDAD</strong></h2><p></p><p>El presente Política de Privacidad establece los términos en que Indalo Clinica Dental usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.</p><p><strong>Información que es recogida</strong></p><p>Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,&nbsp; información de contacto como&nbsp; su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.</p><p><strong>Uso de la información recogida</strong></p><p>Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios. &nbsp;Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.</p><p>Indalo Clinica Dental está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.</p><p><strong>Cookies</strong></p><p>Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras <a href="https://noticiassevillafc.es/" target="_blank">sevilla fc noticias</a> recurrente. Otra función que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.</p><p>Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente. Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.</p><p><strong>Enlaces a Terceros</strong></p><p>Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.</p><p><strong>Control de su información personal</strong></p><p>En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.&nbsp; Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico. &nbsp;En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.</p><p>Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.</p><p>Indalo Clinica Dental Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn-close position-absolute start-0" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
    </div>
  </div>
</div>