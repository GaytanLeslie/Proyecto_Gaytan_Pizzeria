<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM cliente WHERE id_cliente='$id'";
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
                    
                                <input type="hidden" name="id_cliente" value="<?php echo $row['id_cliente']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="INGRESA NOMBRE(S)" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="INGRESA APELLIDOS" value="<?php echo $row['apellidos']  ?>">
                                <input type="text" class="form-control mb-3" name="telefono" placeholder="INGRESA TELEFONO" value="<?php echo $row['telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="INGRESA CORREO" value="<?php echo $row['correo']  ?>">
                                <input type="text" class="form-control mb-3" name="direccion" placeholder="INGRESA DIRECCION" value="<?php echo $row['direccion']  ?>">
                                <input type="text" class="form-control mb-3" name="cp" placeholder="INGRESA CP" value="<?php echo $row['cp']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>