<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clinica Dental</title>
    <link rel="stylesheet" href="src/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'layouts/nav.php';
    ?>

        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagenes/img1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagenes/img2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="imagenes/img3.png" class="d-block w-100" alt="...">
            </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>

        <section class="w-50 mx-auto text-center pt-5" id="intro">
            <h1 class="p-3 fs-2 border-top border-3">Un consultorio único para todos tus problemas <span class="text-primary">Dentales</span></h1>
            <p class="p-3 fs-4">Estamos para servirte y ofrecerte el servicio de los mejores profesionales del rubro</p>
        </section>


        <div id="local" class="border-top border-2">
            <div class="mapa"><img src="imagenes/mapa.png" width="800px" height="700px"> </div>
            <div>
                <div class="wrapper-local">
                    <h2>Ubicado en Alta Gracia, Córdoba</h2>
                    <h2 class="text-primary mb-4"></h2>
                    <p class="fs-5 text-body">Elegimos Alta Gracia para nuestra clínica con el objetivo de estar cerca a nuestros pacientes. Estamos ubicados en el centro de la ciudad, uno de los sectores con más movimiento de personas, donde recibirá la mejor atención posible, y se le brindará ayuda de todo tipo. ¡Muchas gracias!</p>
                    <section class="d-flex justify-content-start" id="numeros-local">
                </section>
                </div>
            </div>
        </div>


    <!--========================================================== -->
                        <!-- CONTENEDOR DEL FORMULARIO -->
    <!--========================================================== 

    <div class="container  border-top border-primary " style="max-width: 500px; background-color: rgb(168, 168, 228); border-radius: 5px;" id="contenedor-formulario">
        <div class="text-center mb-4" id="titulo-formulario">
        <div><img src="imagenes/support.png" alt="" class="img-fluid ps-5"></div>
        <h2>Contactanos</h2>
        <p class="fs-5">Estamos aquí para hacer realidad de tus proyectos</p>
        </div>
        <form   method="POST" data-netlify="true" action="#">     
            <div class= "mb-3">           
                <input type="email" class="form-control" id="email" name="email" placeholder="nombre@ejemplo.com">
            </div>

            
            <div class="mb-3">            
                <input type="input" class="form-control" id="name" name="name" placeholder="John Doe">
            </div>
        

            <div class="mb-3">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Teléfono">
            </div>

            <div class="mb-3">       
            <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            </div>

            <div class="mb-3">
            <button type="submit" class=" btn btn-primary w-100 fs-5">Enviar Mensaje</button>
            </div>
        </form>
    </div>
</section><br>-->
<br>

<footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
    <p class="fs-5 px-3  pt-3">OkaloSoftware &copy; Todos Los Derechos Reservados 2021</p>
    <div id="iconos" >
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>  
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>