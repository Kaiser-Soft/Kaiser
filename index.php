<?php 
   include ("NoRetro.php");
 ?> 
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="apple-touch-icon" sizes="57x57" href="favic/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favic/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favic/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favic/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favic/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favic/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favic/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favic/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favic/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favic/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favic/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favic/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favic/favicon-16x16.png">
	<link rel="manifest" href="favic/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favic/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/StylesIndex.css">
    <link rel="stylesheet" href="styles/loader.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://kit.fontawesome.com/6087628f18.js" crossorigin="anonymous"></script>
    <title>Inicio</title>
</head>

<body>
<div id="contenedor_carga">
     <div id="carga">
      <img src="icon.png" width="100px" height="100px">
     </div>
</div>
    <div class="container">
            <!--Barra de navegación con Boostrap-->
            <nav class=" navbar navbar-expand-lg navbar-light sticky-top" style=" margin-top:10px; ; box-shadow: 1px 1px 5px #A09C9C; border-radius: 5px;">
                    <a class="navbar-brand" href="#">
                        <img src="icon.png" width="30" height="30" class="d-inline-block align-top" alt="Kaiseer">
                        Kaiser
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <!--<li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>-->
                    </ul>
                    <br>
                    <form class="form-inline my-2 my-lg-0">
                        <a href="Login.php" class="btn btn-outline-primary mr-3">
                            <i class="fas fa-sign-in-alt"></i>
                            Iniciar</a>
                            <a href="Registro.php" class="btn btn-outline-primary mr-3">
                                <i class="fas fa-plus-square"></i>    
                                Registrar</a>
                            </form>
                </div>
            </nav>
            <p class="EspacioBlanco"></p>
            <div style="text-align:center;">
                <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex column">
                    <main class="inner cover" role="main">
                        <h1 class="cover-heading titulo-k">Kaiser</h1>
                        <p class="lead parrafo-k">Bienvenidos a Kaiser página de registro de accidentes</p>
                        <a href="" class="btn btn-lg btn-secondary">Registrar</a>
                        <p class="EspacioBlanco"></p>
                    </main>
                </div>
            </div>    
            <!--Fin del navbar-->
            <!--Contenido-->
            <!-- Comento código para mejora de interfaz de usua -->
            <!-- <section class="container contenido" style="height:600px;">
                
                <h1 style="margin-top:20px;">Kaiser</h1>
                <div style="margin-top: 20px;">
                    <img src="imgs/kai.png" alt="" class="rounded img-fluid" width="500px" height="600px" style="float:left; margin-right:20px;">
                    
                    <p style="text-align: justify;"> Kaiser te ayuda a identificar los puntos donde ocurre una gran tasa de 
                        accidentalidad en las vias.<br>
                        Te ayudamos a identificar con nuestro mapa dinámico los puntos de accidente.<br>
                        Estos puntos los proporcionan usuarios como tú llenando un formulario que en un par de clicks esta.<br>
                        Con nuestra sencilla interfaz no creo que te compliques y ahora que esperes registrate y empieza a ayudar a esta comunidad
                    </p>     
            </div>
        </section> -->
        
        <!-- <section class=contenido2>

        
            <h1>Mapa</h1>
            <div>
                <img style="float:right; margin:10px;"  class="rounded img-fluid" src="imgs/map1.png" width="500px" height="600px"/>
                <p>
                    Nuestro mapa esta la 24 horas del día por lo que por lo unico que debes de preocuparte es por conducir bien.
                    Con <a href="https://leafletjs.com/">leaflet</a> te facilitamos una vista de un mapa dinámico a tu alcanze.
                    Puedes acceder a nuestros servicios desde tu smartphones , tablest, Computadoras. 
                </p>
                
            </div>
        </section>   -->
            <!-- <div class="card-deck col-sm-12 row" style="margin-top:20px;">
                
                <div class="card" style="width: 18rem;">
                            <img src="imgs/tel.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dispositivos</h5>
                                <p class="card-text">Puedes visualizar nuestro servicio desde cualquier dispositivo inteligente que tengas a mano</p>
                                
                            </div>
                        </div>
                        <div class="card" style="width: 18rem; ">
                            <img src="imgs/tel2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Fácil de Usar</h5>
                                <p class="card-text">Con solo un par de click puedes enviar tu reporte.</p>
                            </div>
                        </div>
                        <div class="card" style="width: 18rem;" >
                            <img src="imgs/tel3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">¡Registrate ya!</h5>
                                <p class="card-text">¡Que esperas para registrarte!</p>
                                <a href="Registro.php" class="btn btn-primary">Registrar</a>
                            </div>
                        </div>
                    </div>
            </div>    -->
        </div> <!-- final de container -->
        <!--Final Contenido-->
        <!-- Footer -->
    <div class="container">
        <footer class="footer mt-auto py-3">
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                <a href="#"> Kaiser</a>
            </div>
        </footer>
    </div>
      <!-- Footer -->
        <!--Scripts -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="scripts/bootstrap.min.js"></script> -->
    <script src="loader.js"></script>
</body>

</html>