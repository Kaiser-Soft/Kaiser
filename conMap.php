<?php 
    include ("Permisos.php");
    include ("Server.php");
    if ($conect->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    } 
    $lat= mysqli_query($conect,"SELECT * FROM `ubicacion`");
    
    $row;
    $con=0;
    //$hola=mysqli_num_rows($lat);
    echo "<script>var lati = new Array(0);
    var longi = new Array(0);</script>";
    while ($row=mysqli_fetch_array($lat)){

        echo "<script>
        var x=".$row["latitud"].";
        lati.push(x);
        var y=".$row["longitud"].";
        longi.push(y);
        </script>";
    }
    mysqli_close($conect);
?>