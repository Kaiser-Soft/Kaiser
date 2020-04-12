<?php 
    include "conexion.php";
    if ($conect->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    }   
    $lat= "SELECT `latitud` FROM `ubicacion` WHERE 1";
    $lon= "SELECT `longitud` FROM `ubicacion` WHERE 1";
    mysqli_close($conect);
?>