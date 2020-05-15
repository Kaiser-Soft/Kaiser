<?php 
    include ("Permisos.php");
    include ("Server.php");
    if ($conect->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
    } 
    //$lat= mysqli_query($conect,"SELECT * FROM `formulario`");
    $comentarios =mysqli_query($conect, "SELECT f.ID, f.preguntauno, f.preguntados, f.latitud, f.longitud, r.Nombres FROM formulario f INNER JOIN Registro r ON f.IdUsuario=r.ID");
    
    $row;
    $con=0;
    echo "<script>var p1 = new Array(0);
    var p2 = new Array(0);
    var user=new Array(0);
    </script>";
    //$hola=mysqli_num_rows($lat);
    echo "<script>var lati = new Array(0);
    var longi = new Array(0);</script>";
    while ($row=mysqli_fetch_array($comentarios)){
        // echo $row["ID"];
        // echo $row["preguntauno"];
        // echo $row["preguntados"];
        // echo $row["latitud"];
        // echo $row["longitud"];
        // echo $row["Nombres"];
        // echo "<script>var prueba=".json_encode($row["preguntauno"]).";</script>";
        echo "<script>
        var pr1=".json_encode($row["preguntauno"]).";
        p1.push(pr1);
        var pr2=".json_encode($row["preguntados"]).";
        p2.push(pr2);
        var us=".json_encode($row["Nombres"]).";
        user.push(us);
        var x=".$row["latitud"].";
        lati.push(x);
        var y=".$row["longitud"].";
        longi.push(y);
        </script>";
    }
    mysqli_close($conect);
?>