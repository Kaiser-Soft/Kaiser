<?php 
	include ("Permisos.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="styles/StylesFormul.css">
	<!-- comentario desactivo boostrap para arreglar bug de ubicación-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/loader.css">
	<link rel="stylesheet" href="styles/StylesIndex.css">
    <!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://kit.fontawesome.com/6087628f18.js" crossorigin="anonymous"></script>
	<title>Formulario</title>

	

</head>

<body  style="background-color:#E3E2E2;">
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
					<li class="nav-item active mt-1 mb-1">
						<a href="Mapa.php" class="btn btn-outline-dark mr-3">
							<i class="fas fa-map-marked-alt"></i>
							Mapa
						</a>
					</li>
					<li class="nav-item mt-1 mb-1">
						<a href="Reporte.php" class="btn btn-outline-dark mr-3">
							<i class="fas fa-car-crash"></i>
							Reporte
						</a>
					</li>
				</ul>
				<br>
				<form class="form-inline my-2 my-lg-0">
					<!--<a href="Login.php" class="btn btn-outline-dark mr-3">
						<i class="far fa-user"></i>
						Perfil</a>-->
					<a href="inicio.php" class="btn btn-outline-dark mr-3">
					<i class="fas fa-arrow-left"></i>
					</a>
				</form>
			</div>
		</nav>
		<form class="form" method="POST" action="insert.php">
				<h1 class="titulo" style="text-align:center;">Formulario para el registro de accidentes kaiser</h1>
		<div class="pre-1">

			<label class="gravedad">1 - Gravedad del accidente</label>
			<br />
			<!--El atributo value contiene el valor que envía el formulario si el botón radio está marcado.Si el atributo value no está establecido, el formulario envía el valor on-->
			
			<input type="radio" name="gravedad" value="con muertos" required="" class="inputs-radio"> Presencia de Muertos
			
			<input type="radio" name="gravedad" value="con heridos" class="inputs-radio"> Presencia de Heridas
			
			<input type="radio" name="gravedad" value="solo daños" class="inputs-radio"> Solo Daños materiales
			
		</div>
		<div class="pre-2">
			
			<br /><label class="gravedad">2 - Tipo de accidente</label>
			<br />
			
			<input type="radio" name="clase_de_accidente" value="choque del vehiculo" class="inputs-radio"> choque del
			vehiculo
			<input type="radio" name="clase_de_accidente" value="atropello de peaton" class="inputs-radio"> atropello de
			peaton
			<input type="radio" name="clase_de_accidente" value="volcamiento del vehiculo" class="inputs-radio"> volcamiento
			del vehiculo
			<input type="radio" name="clase_de_accidente" value="caida ocupante del vehiculo" class="inputs-radio"> caida
			ocupante del vehiculo
			<input type="radio" name="clase_de_accidente" value="incendio del vehiculo" class="inputs-radio"> incendio del
			vehiculo
			<input type="radio" name="clase_de_accidente" value="otro" class="inputs-radio"> otro
		</div>
		<div class="pre-3">

			<br /><label for="choque con">3 - choque con</label>
			<br />
			
			<input type="radio" name="choque_con" value="vehiculo" class="inputs-radio"> vehiculo
			
			<input type="radio" name="choque_con" value="tren" class="inputs-radio"> tren
			
			<input type="radio" name="choque_con" value="semoviente" class="inputs-radio"> semoviente
			
			<input type="radio" name="choque_con" value="muro" class="inputs-radio"> muro
			
			<input type="radio" name="choque_con" value="poste" class="inputs-radio"> poste
			
			<input type="radio" name="choque_con" value="arbol" class="inputs-radio"> arbol
			
			<input type="radio" name="choque_con" value="baranda" class="inputs-radio"> baranda
			
			<input type="radio" name="choque_con" value="semaforo" class="inputs-radio"> semaforo
			
			<input type="radio" name="choque_con" value="inmueble" class="inputs-radio"> inmueble
			
			<input type="radio" name="choque_con" value="hidrante" class="inputs-radio"> hidrante
			
			<input type="radio" name="choque_con" value="valla, señal" class="inputs-radio"> valla, señal
			
			<input type="radio" name="choque_con" value="tarima, caseta" class="inputs-radio"> tarima, caseta
			
			<input type="radio" name="choque_con" value="vehiculo estacionado" class="inputs-radio"> vehiculo estacionado
			
		</div>
		<div class="pre-4">

			<br />
			<label for="lugar">4.1 - lugar</label>
			<br />
			<input type="text" name="lugar"
			placeholder="delimitado por coma ',' escriba: via y kilometro o sitio, direccion y ciudad" required class="inputs">
			
			<br /><label for="localidad o comuna">4.2 - localidad o comuna</label>
			<br />
			<input type="text" name="localidad" placeholder="localidad o comuna"  class="inputs">
		</div>
		<div class="pre-5">

			<br /> <label for="fecha y hora">5 - fecha y hora</label>
			<br />
			fecha: <input type="date" name="fecha" size="20" required="" class="inputs">
			hora: <input type="time" name="hora" size="20" required="" class="inputs">
		</div>
		<div class="pre-6">

			<br /> <label for="area">6.1 - area</label>
			<br />
			<input type="radio" name="area" value="rural" required="" class="inputs-radio"> rural
			
			<input type="radio" name="area" value="urbana" class="inputs-radio"> urbana
			
			<br /> <label for="sector">6.2 - sector</label>
			<br />
			<input type="radio" name="sector" value="residencial" class="inputs-radio"> residencial
			<input type="radio" name="sector" value="comercial" class="inputs-radio">comercial
			<input type="radio" name="sector" value="industrial" class="inputs-radio"> industrial
			<input type="radio" name="sector" value="escolar" class="inputs-radio"> escolar
			<input type="radio" name="sector" value="militar" class="inputs-radio"> militar
			<input type="radio" name="sector" value="deportiva" class="inputs-radio"> deportiva
			
			<br /> <label for="diseño">6.3 - diseño de la via</label>
			<br />
			<input type="radio" name="diseno" value="tramo de via" class="inputs-radio">tramo de via
			<input type="radio" name="diseno" value="interseccion" class="inputs-radio"> interseccion
			<input type="radio" name="diseno" value="via peatonal" class="inputs-radio">via peatonal
			<input type="radio" name="diseno" value="paso elevado" class="inputs-radio">paso elevado
			<input type="radio" name="diseno" value="paso inferior" class="inputs-radio">paso inferior
			<input type="radio" name="diseno" value="paso a nivel" class="inputs-radio">paso a nivel
			<input type="radio" name="diseno" value="glorieta" class="inputs-radio">glorieta
			<input type="radio" name="diseno" value="puente" class="inputs-radio">puente
			<input type="radio" name="diseno" value="via troncal" class="inputs-radio">via troncal
			<input type="radio" name="diseno" value="lote o predio" class="inputs-radio">lote o predio
			<br /> <label for="tiempo">6.4 clima</label>
			<br />
			<input type="radio" name="tiempo" value="soleado" class="inputs-radio"> soleado
			<input type="radio" name="tiempo" value="lluvia" class="inputs-radio">lluvia
			<input type="radio" name="tiempo" value="viento" class="inputs-radio">viento
			<input type="radio" name="tiempo" value="niebla" class="inputs-radio">niebla
		</div>
		<div class="pre-7">
			<br /><label for="observaciones">7 - observaciones</label>
			<br />
			<input type="text" name="observaciones" placeholder="observaciones acerca del accidente" class="inputs">
		</div>
		<div id="localizacion"></div>

		<center><input type="submit" value="Enviar" class="btn btn-outline-primary m-3"></center>
	</form>
</div>
<!-- Footer -->
<footer class="page-footer font-small">
		<div class="footer-copyright text-center py-3">© 2019 Copyright:
			<a href="#"> Kaiser</a>
		</div>
	</footer>
	<!-- Footer -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="loader.js"></script> 
<script>
		if ("geolocation" in navigator) { 
			navigator.geolocation.getCurrentPosition(function (position) {
				alert("funciona");
				console.log("Tu  localización nLat : " + position.coords.latitude + " nLang :" + position.coords.longitude);
				var latit = document.createElement("input");
				latit.setAttribute("type", "text");
				latit.setAttribute("class", "lati");
				latit.setAttribute("value", position.coords.latitude);
				latit.setAttribute("name", "latit");
				document.body.appendChild(latit);
				var longi = document.createElement("input");
				longi.setAttribute("type", "text");
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
</body>

</html>
