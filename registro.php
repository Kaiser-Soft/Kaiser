<?php
    include 'include/conexion.php';

    if($conect->connect_error){
        die("Conexion fallida: " . $conect->connect_error);
    }
    $row;
    $correo=$_POST["Email"];
    $log = mysqli_query($conect,"SELECT * FROM registro WHERE email='$correo'");
    if(mysqli_num_rows($log)>0){
        $row=mysqli_fetch_array($log);
        $correo=$row['email'];
        echo '<script type="text/javascript">
			alert("El e-mail ya esta registrado");
			function redireccionar(){
			  window.location="Registro.php";
			} 
			setTimeout ("redireccionar()", 1000);
			</script>';
    }else{
        $sql="INSERT INTO `registro`(`email`, `Nombres`, `Apellidos`, `TipoDoc`, `NumDoc`, `NumTel`, `Password`)
                             VALUES ('".$_POST["email"]."','".$_POST["nombres"]."','".$_POST["apellidos"]."','".$_POST["TipDoc"]."','".$_POST["documento"]."','".$_POST["celular"]."','".$_POST["password"]."')";
        if(mysqli_query($conect, $sql)){
            header('Location:login.php');
            exit();
        }else{
            echo "ocurrió un error al registrarte, intentalo de nuevo mas tarde";
        }
    }
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
    <link rel="stylesheet" href="styles/StylesForm.css">
    <link rel="stylesheet" href="styles/loader.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/StylesIndex.css">
    <script href="bootstrap/js/bootstrap.min.js"></script>
    <title>Registro | Kaiser</title>
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
    </nav>
    <form class="formulario" method="post" action="registro.php">
	       <h1 class="titulo-form">Registro</h1>
	    	<input type="email" name="email" placeholder="Email" class="inputs-inserts" required>
	    	<input type="text" name="nombres" placeholder="Nombres" class="inputs-inserts" required>
	    	<input type="text" name="apellidos" placeholder="Apellidos" class="inputs-inserts" required>
	    	<select class="inputs-inserts" required name="TipDocu" value="TipDoc">
	    		<option value="CC" name="TipDocu">Cedula de Ciudadania</option>
	    		<option value="TI" name="TipDocu">Tarjeta de identidad</option>
	    		<option value="PS" name="TipDocu">Pasaporte</optlion>
	    	</select>
	    	<input type="text" name="documento" placeholder="Número de Documento" class="inputs-inserts" required>
	    	<input type="text" name="celular" placeholder="Número de Celular" class="inputs-inserts" required>
	    	<input type="password" name="password" placeholder="Contraseña" class="inputs-inserts" required>
            <p class="text-termn"><input type="checkbox" class="input-check" required> Acepta terminos y condiciones</p>
	    	
	    	<input type="submit" name="Enviar" class="btn-env">
            <br><a href="Login.php">Iniciar Sesion</a> 
    </form>
    <script src="loader.js"></script> 
</body>
</html>