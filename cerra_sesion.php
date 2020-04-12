<?php 
	session_start();
	error_reporting(0);
	$varsesion= $_SESSION['email'];
	if ($varsesion== null || $varsesion= '') {
		echo '<script type="text/javascript">
			alert("Usted no tiene autorización");
			function redireccionar(){
			  window.location="index.php";
			} 
			setTimeout ("redireccionar()", 1000);
			</script>';
		die();
	}
	session_destroy();
	header("location:index.php");
 ?>