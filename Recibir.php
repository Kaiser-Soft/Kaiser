<?php
	/**
	 * variables de conexion a la base datos 
	 */
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "BaseDatosWeb";
	/**
	 *  conexion a la base de datos
	 */


	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	$row;
	$user=$_POST["Email"];
	$log = mysqli_query($conn,"SELECT * FROM Registro WHERE email='$user'");
		//$row=mysqli_fetch_array($consult)
		if (mysqli_num_rows($log)>0) 
		{
			$row = mysqli_fetch_array($log);
			$user=$row['email'];
			echo '<script type="text/javascript">
			alert("El e-mail ya esta registrado");
			function redireccionar(){
			  window.location="Registro.php";
			} 
			setTimeout ("redireccionar()", 1000);
			</script>';
			//echo "<script>alert('Este email ya esta registrado');";	
		}
		else {
				$sql = "INSERT INTO Registro (email, Nombres, Apellidos,TipoDoc, NumDoc, NumTel, Password) /** columnas  de labase datos**/
				VALUES ('".$_POST["Email"]."' , '".$_POST["Nombres"]."' , '".$_POST["Apellidos"]."','".$_POST["TipDocu"]."', '".$_POST["NumDocumento"]."','".$_POST["NumCelular"]."' , '".md5($_POST["password"])."')"; // valores del formulario

				if (mysqli_query($conn, $sql)) {
					header('Location:Login.php');
					exit();

				} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}

		}
	/**
	 *  insert de labase datos
	 */
	//$password=$_POST["password"];
	//$password_cifrado=password_hash(string, PASSWORD_DEFAULT);

	//$sql = "INSERT INTO Registro (email, Nombres, Apellidos,TipoDoc, NumDoc, NumTel, Password) /** columnas  de labase datos**/
	//	VALUES ('".$_POST["Email"]."' , '".$_POST["Nombres"]."' , '".$_POST["Apellidos"]."','".$_POST["TipDocu"]."', '".$_POST["NumDocumento"]."','".$_POST["NumCelular"]."' , '".$_POST["password"]."')"; // valores del formulario

	//	if (mysqli_query($conn, $sql)) {
	//		header('Location:Login.php');
	//		exit();

	//	} else {
	//	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	//	}

mysqli_close($conn);

?>