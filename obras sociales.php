<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="src/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <nav  class="navbar navbar-expand-lg navbar-light p-3" style="background-color: #e3f2fd;"  id="menu">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="../../Turnero/img/logo.svg" alt="" width="30" height="24">
                <span class="fs-5 text-primary fw-bold">Clinica Dental</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item d-flex me-2">
                    <a class="nav-link" aria-current="page" href="acerca de.php">Acerca de</a>
                </li>

                <li class="nav-item d-flex me-2">
                    <a class="nav-link" href="especialidades.html">Especialidades</a>
                </li>

                <li class="nav-item d-flex me-2">
                    <a class="nav-link" href="obras sociales.php">Obras sociales</a>
                </li>
                
                <li class="nav-item d-flex me-2">
                    <a class="nav-link" href="registro.php">Registrarse</a>
                </li>

                </ul>
                
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <div class="row w-100 mx-auto my-5 icono-wrap">
            <hr style="color: white;">
            <div class="col-lg-6 col-md-12 col-sm-12 "><a href="https://www.medife.com.ar/" target="_blank"> <img src="imagenes/medife2.png" width="225" height="135" class=" rounded-4 border border-dark"></a></div>
            <div class="col-lg-6 col-md-12 col-sm-12 "><a href="https://www.ioma.gba.gob.ar/" target="_blank"> <img src="imagenes/ioma.jpeg" width="225" height="135" class=" rounded-4 border border-dark"></a></div><hr style="color: white;"><hr style="color: white;">
            <div class="col-lg-6 col-md-12 col-sm-12"><a href="https://www.apross.gov.ar/" target="_blank"> <img src="imagenes/apross.jpeg" width="225" height="135" class=" rounded-4 border border-dark"></a></div>
            <div class="col-lg-6 col-md-12 col-sm-12"><a href="https://www.biblosasesores-galeno.com.ar/?provincia=nacional&keyword=galeno&location=20026&gclid=EAIaIQobChMI3tHYxans-gIVyUJIAB1YNAiVEAAYASAAEgI3MPD_BwE" target="_blank"> <img src="imagenes/logogaleno1.jpg" width="225" height="135" class=" rounded-4 border border-dark"></a></div>    
            <!-- Force next columns to break to new line -->
            <div class="w-100"></div>
            
            <!--<div class="col-lg-6 col-md-12 col-sm-12"><img src="imagenes/dentist.png" width="180" height="160"></div>
            <div class="col-lg-6 col-md-12 col-sm-12"><img src="imagenes/dentist.png" width="180" height="160"></div> 

            <div class="w-100"></div><br><hr>

            <div class="col-lg-6 col-md-12 col-sm-12"><img src="imagenes/dentist.png" width="180" height="160"></div>
            <div class="col-lg-6 col-md-12 col-sm-12"><img src="imagenes/dentist.png" width="180" height="160"></div>     -->
            <!-- Force next columns to break to new line 
            <div class="w-100"></div><br><br>--->
        </div>
    </div>

    <footer class="w-100  d-flex  align-items-center justify-content-center flex-wrap">
        <p class="fs-5 px-3  pt-3">OkaloSoftware &copy; Todos Los Derechos Reservados 2021</p>
        <div id="iconos" >
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>  
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </bod