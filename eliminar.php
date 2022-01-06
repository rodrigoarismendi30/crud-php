<?php
    include ("conexion.php");
    $con =conectar();

    $codigo_estudiante=$_GET['codigo_estudiante'];
    

    $sql="DELETE FROM alumno WHERE codigo_estudiante ='$codigo_estudiante'";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");

    }else{

    }
    ?>