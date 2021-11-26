<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM pedidos WHERE id_pedido='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_pedido" value="<?php echo $row['id_pedido']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="descripccion" placeholder="INGRESA DESCRIPCCION" value="<?php echo $row['descripccion']  ?>">
                                <input type="text" class="form-control mb-3" name="destino" placeholder="INGRESA DESTINO" value="<?php echo $row['destino']  ?>">
                                <input type="text" class="form-control mb-3" name="met_pago" placeholder="INGRESA METODO PAGO" value="<?php echo $row['met_pago']  ?>">
                                <input type="text" class="form-control mb-3" name="propina" placeholder="INGRESA PROPINA" value="<?php echo $row['propina']  ?>">
                                <input type="text" class="form-control mb-3" name="total" placeholder="INGRESA TOTAL" value="<?php echo $row['total']  ?>">
                                <input type="date" class="form-control mb-3" name="fecha" placeholder="INGRESA FECHA" value="<?php echo $row['fecha']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>