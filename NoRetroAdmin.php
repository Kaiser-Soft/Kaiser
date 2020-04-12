<?php
  session_start();
  include 'Server.php';
  if (isset($_SESSION['Usuario'])) {
    header('location:Admin.php');
  }
?>