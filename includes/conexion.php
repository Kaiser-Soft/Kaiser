<?php 
	$db="wuebos";
	$conect=mysqli_connect("localhost","root","")or die ("No se encontro el servidor");
	mysqli_select_db($conect, $db) or die ("No se ecnontro la base de datos");
 ?>