<?php  
	session_start();
?>	
<?php 
include 'Server.php';
	if (isset($_POST['login'])) {
		$usuario = $_POST['usuario'];
		$pw = $_POST['contra'];
		//password_verify($password, hash)
		$log = mysqli_query($conect,"SELECT * FROM Administrador WHERE Usuario='$usuario' AND Contrasena='$pw'");
		if (mysqli_num_rows($log)>0) {
			$row = mysqli_fetch_array($log);
			$_SESSION["Usuario"]=$row['Usuario'];
			header("location:inicio.php");
		}
		else{
			echo '<script type="text/javascript">
			alert("Contraseña y usuario incorrecto");
			function redireccionar(){
			  window.location="LoginAdmin.php";
			} 
			setTimeout ("redireccionar()", 1000);
			</script>';
		}
	}
 ?>