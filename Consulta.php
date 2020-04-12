<?php 
    //include ("Permisos.php");
    include ("Server.php");
    if ($conect->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    } 
    $lat= mysqli_query($conect,"SELECT * FROM `accidentes`");
    
    $row;
    $con=0;
    //$hola=mysqli_num_rows($lat);
    //echo "<script>var lati = new Array(0);var longi = new Array(0);</script>";
    while ($row=mysqli_fetch_array($lat)){

        echo $row["gravedad_del_accidente"]."|".$row["tipo_de_accidente"];
    }
    mysqli_close($conect);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consulta</title>
</head>
<body>
    
</body>
</html>