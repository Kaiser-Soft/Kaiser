<?php
  session_start();
  include 'Server.php';
  if (isset($_SESSION['email'])) {
    header('location:inicio.php');
  }
?>