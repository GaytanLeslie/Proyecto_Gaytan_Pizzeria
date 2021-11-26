<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Empleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="id_empleado" placeholder="ID EMPLEADO">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="INGRESA NOMBRE(S)">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="INGRESA APELLIDOS">
                                    <input type="text" class="form-control mb-3" name="domicilio" placeholder="INGRESA DOMICILIO">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="INGRESA TELEFONO">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="INGRESA CORREO">
                                    <input type="text" class="form-control mb-3" name="sueldo" placeholder="INGRESA SUELDO">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Gaytan_Pizzeria/index.php" class="btn btn-primary" >Volver al inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID EMPLEADO</th>
                                        <th>INGRESA NOMBRE/S</th>
                                        <th>INGRESA APELLIDOS</th>
                                        <th>INGRESA DOMICILIO</th>
                                        <th>INGRESA TELEFONO</th>
                                        <th>INGRESA CORREO</th>
                                        <th>INGRESA SUELDO</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_empleado']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['domicilio']?></th> 
                                                <th><?php  echo $row['telefono']?></th>
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['sueldo']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['id_empleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_empleado'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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