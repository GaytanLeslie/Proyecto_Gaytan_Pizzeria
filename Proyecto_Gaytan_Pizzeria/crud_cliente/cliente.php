<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM cliente";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Cliente</title>
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

                                    <input type="text" class="form-control mb-3" name="id_cliente" placeholder="ID CLIENTE">
                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="INGRESA NOMBRE(S)">
                                    <input type="text" class="form-control mb-3" name="apellidos" placeholder="INGRESA APELLIDOS">
                                    <input type="text" class="form-control mb-3" name="telefono" placeholder="INGRESA TELEFONO">
                                    <input type="text" class="form-control mb-3" name="correo" placeholder="INGRESA CORREO">
                                    <input type="text" class="form-control mb-3" name="direccion" placeholder="INGRESA DIRECCION">
                                    <input type="text" class="form-control mb-3" name="cp" placeholder="INGRESA CP">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Gaytan_Pizzeria/index.php" class="btn btn-primary" >Volver al inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID CLIENTE</th>
                                        <th>INGRESA NOMBRE/S</th>
                                        <th>INGRESA APELLIDOS</th>
                                        <th>INGRESA TELEFONO</th>
                                        <th>INGRESA CORREO</th>
                                        <th>INGRESA DIRECCION</th>
                                        <th>INGRESA CP</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_cliente']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['telefono']?></th> 
                                                <th><?php  echo $row['correo']?></th>
                                                <th><?php  echo $row['direccion']?></th>
                                                <th><?php  echo $row['cp']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['id_cliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_cliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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