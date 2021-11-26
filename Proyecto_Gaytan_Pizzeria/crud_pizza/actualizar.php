<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM pizza WHERE id_pizza='$id'";
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
                    
                                <input type="hidden" name="id_pizza" value="<?php echo $row['id_pizza']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="masa" placeholder="INGRESA LA MASA" value="<?php echo $row['masa']  ?>">
                                <input type="text" class="form-control mb-3" name="tamano" placeholder="INGRESA EL TAMAÑO" value="<?php echo $row['tamano']  ?>">
                                <input type="text" class="form-control mb-3" name="salsa" placeholder="INGRESA SALSA (SI/NO)" value="<?php echo $row['salsa']  ?>">
                                <input type="text" class="form-control mb-3" name="queso" placeholder="INGRESA QUESO (SI/NO)" value="<?php echo $row['queso']  ?>">
                                <input type="text" class="form-control mb-3" name="ingredientes" placeholder="INGRESA INGREDIENTES" value="<?php echo $row['ingredientes']  ?>">
                                <input type="text" class="form-control mb-3" name="adicionales" placeholder="INGRESA ADICIONALES" value="<?php echo $row['adicionales']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>