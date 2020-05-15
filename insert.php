<?php
	include "conexion.php";
	// $servername = "localhost";
	// $username = "root";
	// $password = "";
	// $dbname = "kaiser";
	// $conn = new mysqli($servername, $username, $password, $dbname);
	$p_1=$_POST['pregunta1'];
	$p_2=$_POST['pregunta2'];
	$lon=$_POST['longit'];
	$lat=$_POST['latit'];
	$usuario=$_POST['usuario'];
	if ($conect->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	$sql = "INSERT INTO formulario (preguntauno, preguntados, latitud, longitud, IdUsuario)
		VALUES ('$p_1','$p_2', '$lat', '$lon', '$usuario')";
	//$sql2= "INSERT INTO `ubicacion`(`latitud`, `longitud`) VALUES ('".$_POST["latit"]."' , '".$_POST["longit"]."')";

		if (mysqli_query($conect, $sql)) {
			header('Location:Mapa.php');
			exit();
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conect);
		}
	mysqli_close($conect);
?>