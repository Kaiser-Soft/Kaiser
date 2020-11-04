<?php
require("conMap.php");
include("conexion.php");
?>
<?php

$email = $_SESSION['email'];
$queryid = mysqli_query($conect, "SELECT ID FROM Registro WHERE email='$email'");
if (mysqli_num_rows($queryid) > 0) {
	$data = mysqli_fetch_array($queryid);
	$iduser = $data["ID"];
} else {
	echo "<script>alert('¡No puedo saber quien eres!')</script>";
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
	<link rel="apple-touch-icon" sizes="57x57" href="favic/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favic/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favic/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favic/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favic/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favic/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favic/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favic/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favic/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="favic/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favic/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favic/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favic/favicon-16x16.png">
	<link rel="manifest" href="favic/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favic/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mapa | Kaiser</title>
	<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/loader.css">
	<link rel="stylesheet" href="styles/StylesMap.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://kit.fontawesome.com/6087628f18.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles/StylesIndex.css">
	<script src="dist/leaflet-heat.js"></script>
</head>

<body style="background-color:#E3E2E2;">
	<div id="contenedor_carga">
		<div id="carga">
			<img src="icon.png" width="100px" height="100px">
		</div>
	</div>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light sticky-top" style="margin-top:10px; ;background-color: #f78472; box-shadow: 1px 1px 5px #A09C9C; border-radius: 5px;">
			<a class="navbar-brand disabled mt-1 mb-1" href="#">
				<img src="icon.png" width="30" height="30" class="d-inline-block align-top" alt="Kaiseer">
				Kaiser
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active mt-1 mb-1">
						<a href="Mapa.php" class="btn btn-outline-dark mr-3">
							<i class="fas fa-map-marked-alt"></i>
							Mapa
						</a>
					</li>
					<li class="nav-item mt-1 mb-1">
						<a href="#" class="btn btn-outline-dark mr-3" data-toggle="modal" data-target="#exampleModalScrollable">
							<i class="fas fa-car-crash"></i>
							Reporte
						</a>
					</li>
				</ul>
				<br>
				<form class="form-inline my-2 my-lg-0 mt-1 mb-1">
					<a href="inicio.php" class="btn btn-outline-dark mr-3">
						<i class="fas fa-arrow-left"></i>
					</a>
				</form>
			</div>
		</nav>
		<div id="map"></div>
		<!-- <script src="ScriptsJS/Location.js"></script> -->
		<script src="ScriptsJS/Mapa.js"></script>
		<!-- Ventana alerta  -->

	<div class="container">
		<div id="miVentana" class="modal" style="display:none;">
			<p>
				<b>
					<i>
						No olvides activar tus luces, es bueno llevarlas encendidas, asi el sol este en su maximo esplendor, esto previene los accidentes, recuerda si esta lloviendo tu limpiabrisas debe estar limpio y en buen estado. Buen viaje
					</i>
				</b>
			</p>
			<!-- <img src="imgs/car.jpg" width="200px" height="300px"> -->
			<a href="#" class="btn btn-outline" onclick="ocultarVentana()">Cerrar</a>
			
		</div>
	</div>
	<!-- Fin ventana alerta -->
	</div>
	<!-- Footer -->
	<footer class="page-footer font-small">
		<div class="footer-copyright text-center py-3">© 2019 Copyright:
			<a href="#"> Kaiser</a>
		</div>
	</footer>
	<!-- Footer -->
	<!-- Ventana -->
	<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-scrollable" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalScrollableTitle">Reporte | Kaiser</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="insert.php" method="post" class="text-center d-b">
						<label>¿Hubo presencia de muertos o heridos?</label>
						<input type="text" placeholder="Respuesta" class="m-3" name="pregunta1">
						<br>
						<label>¿Tipo de accidente?</label>
						<br>
						<input type="text" placeholder="Respuesta" class="m-3" name="pregunta2">
						<div id="localizacion"></div>
						<input type="hidden" name="usuario" value="<?php echo $iduser; ?>">
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
							<button type="submit" class="btn btn-primary">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- fin de ventana -->
	
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="loader.js"></script>
	<script>
		if ("geolocation" in navigator) {
			navigator.geolocation.getCurrentPosition(function(position) {
				console.log("funciona");
				console.log("Tu  localización nLat : " + position.coords.latitude + " nLang :" + position.coords.longitude);
				var latit = document.createElement("input");
				latit.setAttribute("type", "hidden");
				latit.setAttribute("class", "lati");
				latit.setAttribute("value", position.coords.latitude);
				latit.setAttribute("name", "latit");
				document.body.appendChild(latit);
				var longi = document.createElement("input");
				longi.setAttribute("type", "hidden");
				longi.setAttribute("class", "longi");

				longi.setAttribute("value", position.coords.longitude);
				longi.setAttribute("name", "longit");
				document.getElementById("localizacion").appendChild(longi);
				document.getElementById("localizacion").appendChild(latit);
			});
		} else {
			console.log("Browser doesn't support geolocation!");
		}
	</script>
	<!-- Alerta 6 de la tarde -->
	<script type="text/javascript">
		var d = new Date();
		console.log(d.getHours() + ":" + d.getMinutes());

		// function tiempo() {
		// 	if (d.getHours() == 18) {
		// 		mostrarVentana();
				
		// 	}
		// }
		setInterval('mostrarVentana()',60000);
		// setInterval('ocultarVentana()',6000)
		function mostrarVentana()
		{
			var ventana = document.getElementById('miVentana');
			ventana.style.marginTop = "100px";
			// ventana.style.left = ((document.body.clientWidth-350) / 2) +  "px";
			ventana.style.display = 'block';
		}
		function ocultarVentana()
		{
			var ventana = document.getElementById('miVentana');
			ventana.style.display = 'none';
		}
	</script>
	<!-- Fin de alerta -->
</body>

</html>