<?php
    include ("conexion.php");
    $con =conectar();

    $codigo_estudiante=$_POST['codigo_estudiante'];

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];

    $sql="UPDATE alumno SET id='$id',nombre='$nombre',apellido='$apellido' WHERE codigo_estudiante='$codigo_estudiante'";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");

    }else{

    }
    ?>