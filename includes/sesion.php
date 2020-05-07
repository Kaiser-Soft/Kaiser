<?php
  session_start();
  include 'conexion.php';
  if (isset($_SESSION['email'])) {
    header('location:inicio.php');
  }
  $var=$_SESSION['email'];
  if($var==null || $var=''){
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
  header("location:../index.php")
?>