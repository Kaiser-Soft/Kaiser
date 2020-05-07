<?php
      session_start();
      error_reporting(0);
      $varsesion= $_SESSION['email'];
      if ($varsesion== null || $varsesion= '') {
          echo '<script type="text/javascript">
			alert("Por favor inicia sesión para usar nuestro servicio");
			function redireccionar(){
			  window.location="index.php";
			} 
			setTimeout ("redireccionar()", 1000);
			</script>';
          die();
      }
?>