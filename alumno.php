<?php

include ("conexion.php");
$con = conectar();

$sql = "SELECT * FROM alumno";
$query = mysqli_query($con,$sql);

$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Alumno</title>
</head>
<body>
     <div class="container mt-5">
         <div class="row">
                <div class="col-md-3">
                    <h2>Ingresar Datos</h2>
                        <form action="insertar.php" method="POST">
                            <input type="text" class="form-control mb-3" name="codigo_estudiante" placeholder="ingrese codigo estudiante">
                            <input type="text" class="form-control mb-3" name="id" placeholder="ingrese rut">
                            <input type="text" class="form-control mb-3" name="nombre" placeholder="ingrese Nombre">
                            <input type="text" class="form-control mb-3" name="apellido" placeholder="ingrese Apellido">

                            <input type="submit" class="btn btn-primary">
                        </form>
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>Codigo Estudiante</th>
                                <th>Rut</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th></th>
                                <th></th>
                            </tr>   
                        </thead>
                        <tbody>

                            <?php
                                foreach($query as $row){
                            ?>
                                <tr>
                                    <th> <?php echo $row['codigo_estudiante']?> </th>
                                    <th> <?php echo $row['id']?> </th>
                                    <th> <?php echo $row['nombre']?> </th>
                                    <th> <?php echo $row['apellido']?> </th>
                                    <th><a href="actualizar.php?codigo_estudiante=<?php echo $row['codigo_estudiante']?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="eliminar.php?codigo_estudiante=<?php echo $row['codigo_estudiante']?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>
                            <?php
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
     </div>
</body>
</html>