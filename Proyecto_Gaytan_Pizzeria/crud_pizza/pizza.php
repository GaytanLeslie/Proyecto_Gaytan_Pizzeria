
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM pizza";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Pizza</title>
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

                                    <input type="text" class="form-control mb-3" name="id_pizza" placeholder="ID PIZZA">
                                    <input type="text" class="form-control mb-3" name="masa" placeholder="INGRESA LA MASA">
                                    <input type="text" class="form-control mb-3" name="tamano" placeholder="INGRESA EL TAMAÑO">
                                    <input type="text" class="form-control mb-3" name="salsa" placeholder="INGRESA SALSA (SI/NO)">
                                    <input type="text" class="form-control mb-3" name="queso" placeholder="INGRESA QUESO (SI/NO)">
                                    <input type="text" class="form-control mb-3" name="ingredientes" placeholder="INGRESA INGREDIENTES">
                                    <input type="text" class="form-control mb-3" name="adicionales" placeholder="INGRESA ADICIONALES">
                                    
                                    <input type="submit" class="btn btn-primary"> 
                                    <a href="/Proyecto_Gaytan_Pizzeria/index.php" class="btn btn-primary" >Volver al inicio</a>
                        </div>
                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID CLIENTE</th>
                                        <th>INGRESA LA MASA</th>
                                        <th>INGRESA EL TAMAÑO</th>
                                        <th>INGRESA SALSA</th>
                                        <th>INGRESA QUESO</th>
                                        <th>INGRESA INGREDIENTES</th>
                                        <th>INGRESA ADICIONALES</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_pizza']?></th>
                                                <th><?php  echo $row['masa']?></th>
                                                <th><?php  echo $row['tamano']?></th>
                                                <th><?php  echo $row['salsa']?></th> 
                                                <th><?php  echo $row['queso']?></th>
                                                <th><?php  echo $row['ingredientes']?></th>
                                                <th><?php  echo $row['adicionales']?></th>   
                                                <th><a href="actualizar.php?id=<?php echo $row['id_pizza'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_pizza'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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