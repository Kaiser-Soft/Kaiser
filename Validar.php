<?php 
session_start();
	include 'Server.php';
	if (isset($_POST['login'])) {
		$usuario = $_POST['email'];
		$pw = $_POST['contra'];
		//password_verify($password, hash)
		$log = mysqli_query($conect,"SELECT * FROM Registro WHERE email='$usuario' AND Password='$pw'");
		if (mysqli_num_rows($log)>0) {
			$row = mysqli_fetch_array($log);
			
			$_SESSION["email"]=$row['email'];
			header("location:inicio.php");
		}
		else{
			echo '<script type="text/javascript">
			alert("Contraseña y email incorrecto");
			function redireccionar(){
			  window.location="Login.php";
			} 
			setTimeout ("redireccionar()", 1000);
			</script>';
		}
	}
 ?>