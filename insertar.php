 <?php
    include ("conexion.php");
    $con =conectar();

    $codigo_estudiante=$_POST['codigo_estudiante'];
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];

    $sql="INSERT INTO alumno VALUES ('$codigo_estudiante','$id','$nombre','$apellido')";
    $query = mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");

    }else{

    }
    ?>