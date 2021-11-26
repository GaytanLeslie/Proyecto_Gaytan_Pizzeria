<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM pedidos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Pedidos</title>
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

                                    <input type="text" class="form-control mb-3" name="id_pedido" placeholder="ID PEDIDO">
                                    <input type="text" class="form-control mb-3" name="descripccion" placeholder="INGRESA DESCRIPCCION">
                                    <input type="text" class="form-control mb-3" name="destino" placeholder="INGRESA DESTINO">
                                    <input type="text" class="form-control mb-3" name="met_pago" placeholder="INGRESA METODO PAGO">
                                    <input type="text" class="form-control mb-3" name="propina" placeholder="INGRESA PROPINA">
                                    <input type="text" class="form-control mb-3" name="total" placeholder="INGRESA TOTAL">
                                    <input type="date" class="form-control mb-3" name="fecha" placeholder="INGRESA FECHA">

                                    <input type="submit" class="btn btn-primary">
                                    <a href="/Proyecto_Gaytan_Pizzeria/index.php" class="btn btn-primary" >Volver al inicio</a>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID PEDIDO</th>
                                        <th>INGRESA DESCRIPCCION</th>
                                        <th>INGRESA DESTINO</th>
                                        <th>INGRESA METODO PAGO</th>
                                        <th>INGRESA PROPINA</th>
                                        <th>INGRESA TOTAL</th>
                                        <th>INGRESA FECHA</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_pedido']?></th>
                                                <th><?php  echo $row['descripccion']?></th>
                                                <th><?php  echo $row['destino']?></th>
                                                <th><?php  echo $row['met_pago']?></th>
                                                <th><?php  echo $row['propina']?></th>
                                                <th><?php  echo $row['total']?></th>  
                                                <th><?php  echo $row['fecha']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['id_pedido'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_pedido'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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