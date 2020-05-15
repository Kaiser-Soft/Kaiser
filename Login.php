<?php 
   include ("NoRetro.php");
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
	<link rel="stylesheet" href="styles/StylesFormL.css">
	<link rel="stylesheet" href="styles/loader.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/StylesIndex.css">
    <script href="bootstrap/js/bootstrap.min.js"></script>
	<title>Iniciar Sesión | Kaiser</title>
</head>
<body>
<div id="contenedor_carga">
     <div id="carga">
      <img src="icon.png" width="100px" height="100px">
     </div>
</div>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
  </a>
  <!--<form class="form-inline">

    <a href="LoginAdmin.php" class="btn btn-outline-success my-2 my-sm-0">Admin Login</a>
  </form>-->
</nav>
	<form action="Validar.php" method="POST">
	  <div class="formulario">
	    <h1 class="titulo-form">Iniciar Sesión</h1>
		  <input type="text" placeholder="Email" class="inputs-inserts" name="email">
		  <input type="password" placeholder="Contraseña" class="inputs-inserts" name="contra">
		  <input type="submit" value="Iniciar Sesión" class="btn-env" name="login">
        <br><a href="Registro.php" style="color: #000000;">Registrar Aqui</a>
	  </div>
	</form>
	<script src="loader.js"></script> 
</body>
</html>