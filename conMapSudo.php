<?php 
    include ("Permisos.php");
    include ("Server.php");
    if ($conect->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    } 
    $lat= mysqli_query($conect,"SELECT * FROM `registros`");
    
    $row;
    $con=0;
    //$hola=mysqli_num_rows($lat);
    echo "<script>var latiS = new Array(0);
    var longiS = new Array(0);</script>";
    while ($row=mysqli_fetch_array($lat)){

        echo "<script>
        var la=".$row["Latitud"].";
        latiS.push(la);
        var lo=".$row["Longitud"].";
        longiS.push(lo);
        </script>";
    }
    mysqli_close($conect);
?>