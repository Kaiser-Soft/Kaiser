<?php 
   include ("Permisos.php");
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Kaiser</title>
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
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="Styles/StylesBtns.css">
	<link rel="stylesheet" href="styles/loader.css">
	<link rel="stylesheet" href="styles/StylesIndex.css">
	<link rel="stylesheet" href="styles/StylesCards.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://kit.fontawesome.com/6087628f18.js" crossorigin="anonymous"></script>
<body style="background-color:#E3E2E2;">
<div id="contenedor_carga">
     <div id="carga">
      <img src="icon.png" width="100px" height="100px">
     </div>
</div>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light sticky-top"
			style="margin-top:10px; ;background-color: #f78472; box-shadow: 1px 1px 5px #A09C9C; border-radius: 5px;">
			<a class="navbar-brand mt-1 mb-1" href="#">
				<img src="icon.png" width="30" height="30" class="d-inline-block align-top" alt="Kaiseer">
				Kaiser
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
				aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a href="Mapa.php" class="btn btn-outline-dark mr-3 mt-1 mb-1">
							<i class="fas fa-map-marked-alt"></i>
							Mapa
						</a>
					</li>
					<!-- Se comenta el reporte debido a que se que cambio de lugar y ahora se posiciona en el mapa -->
					<!-- <li class="nav-item">
						<a href="Reporte.php" class="btn btn-outline-dark mr-3 mt-1 mb-1">
							<i class="fas fa-car-crash"></i>
							Reporte
						</a>
					</li> -->
				</ul>
				<br>
				<form class="form-inline my-2 my-lg-0 mt-1 mb-1">
					<!--<a href="Login.php" class="btn btn-outline-dark mr-3">
						<i class="far fa-user"></i>
						Perfil</a>-->
					<a href="cerra_sesion.php" class="btn btn-outline-dark mr-3">
						<i class="fas fa-door-open"></i>
						Cerrar Sesion</a>
				</form>
			</div>
		</nav>
		<!--Carrousel de imagenes-->
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:50px; box-shadow:5px 5px #A09C9C; border:solid 1px #000; border-radius:5px;">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" style="border-radius: 10px; box-shadow: 1px 1px 5px #A09C9C;">
				<div class="carousel-item active">
					<!--<img src="imgs/prueba.jpeg" class="d-block w-100" alt="...">-->
					<img src="imgs/mpk.png" class="d-block w-100">
				</div>
				<div class="carousel-item">
					<img src="imgs/map1.png" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item">
					<img src="imgs/map1_2.png" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
			<!--CONTENIDO DE LAS CARDS-->
			<center>
			<div class="card-deck col-sm-12 row" style="margin-top:20px;">

                    
                
                <div class="card" style="width: 18rem; box-shadow:5px 5px #A09C9C; border:solid 1px #000;">
                        <img src="imgs/ubK.png" class="card-img-top" alt="..." >
                        <div class="card-body">
                        <h5 class="card-title">Ubicación</h5>
                        <p class="card-text">Para mejor experiencía y presición en nuestros servicios cuando se te pida acceso a tu ubicación aceptala.</p>
                        </div>
				</div>
			</div>
				<div class="card-deck col-sm-12 row" style="margin-top:20px;">

                    <div class="card" style="width: 18rem; box-shadow:5px 5px #A09C9C; border:solid 1px #000;">
                            <img src="imgs/alerta.png" class="card-img-top" alt="..."  width="10px" height="200px">
                            <div class="card-body">
                                <h5 class="card-title">Alerta</h5>
                        <p class="card-text">Mostraremos esta alerta cada cierto tiempo para que no olvides siempre estar al pendiente.</p>
                        </div>
				</div>
				<div class="card" style="width: 18rem; box-shadow:5px 5px #A09C9C; border:solid 1px #000;">
                            <img src="images/marker-icon-2x.png" class="card-img-top" alt="..."  width="10px" height="200px">
                            <div class="card-body">
                                <h5 class="card-title">Puntos</h5>
								<p class="card-text">Si vez este punto en tu mapa esto indica que un usuario como tú reporto un accidente</p>
								<a href="Mapa.php" class="btn btn-outline-dark mr-3">¡Vamos!</a>
                			</div>
                
				</div>
			</center>
			<!--FIN DE CONTENIDO CADS-->
		</div>
	</div>
	
	<!-- Footer -->
	<footer class="page-footer font-small">
		<div class="footer-copyright text-center py-3" style="color:#000000;">© 2020 Copyright:
			<a href="#"> Kaiser</a>
		</div>
	</footer>
	<!-- Footer -->
	<!--<a href="cerra_sesion.php">Cerrar Sesión</a>-->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="loader.js"></script> 
	</body>

</html>