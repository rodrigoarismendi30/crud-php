<?php

include("conexion.php");
$con = conectar();

$id=$_GET['codigo_estudiante'];
$sql="SELECT * FROM alumno WHERE codigo_estudiante='$id'";
$query=mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Acualizar alumno</title>
</head>
<body>
<div class="container mt-5">
         <div class="row">
                <div class="col-md-3">
                    <h2>Actualizar Datos</h2>
                        <form action="editar.php" method="POST">

                            <input type="hidden" name="codigo_estudiante" value="<?php echo $row['codigo_estudiante'] ?>">

                            <input type="text" class="form-control mb-3" name="id" placeholder="ingrese rut" value="<?php echo $row['id'] ?>">
                            <input type="text" class="form-control mb-3" name="nombre" placeholder="ingrese Nombre" value="<?php echo $row['nombre'] ?>">
                            <input type="text" class="form-control mb-3" name="apellido" placeholder="ingrese Apellido" value="<?php echo $row['apellido'] ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                        </form>
                </div>
            </div>
</body>
</html>