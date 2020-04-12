<?php
	include "conexion.php";
	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "kaiser";
	// $conn = new mysqli($servername, $username, $password, $dbname);
	if ($conect->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO accidentes (`gravedad_del_accidente`, `tipo_de_accidente`, `choque_con`, `lugar`, `localidad_o_comuna`, `fecha`, `hora`, `area`, `sector`, `diseno_de_la_via`, `clima`, `observaciones`)
		VALUES ('".$_POST["gravedad"]."' , '".$_POST["clase_de_accidente"]."' , '".$_POST["choque_con"]."' , '".$_POST["lugar"]."' , '".$_POST["localidad"]."' , '".$_POST["fecha"]."' , '".$_POST["hora"]."' 
		, '".$_POST["area"]."' , '".$_POST["sector"]."' , '".$_POST["diseno"]."' , '".$_POST["tiempo"]."' , '".$_POST["observaciones"]."')";
		
	$sql2= "INSERT INTO `ubicacion`(`latitud`, `longitud`) VALUES ('".$_POST["latit"]."' , '".$_POST["longit"]."')";

		if (mysqli_query($conect, $sql) && mysqli_query($conect, $sql2)) {
			header('Location:Mapa.php');
			exit();
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conect);
		}
	mysqli_close($conect);
?>