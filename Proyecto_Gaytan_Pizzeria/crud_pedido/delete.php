<?php

include("conexion.php");
$con=conectar();

$id_pedido=$_GET['id'];

$sql="DELETE FROM pedidos  WHERE id_pedido='$id_pedido'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pedido.php");
    }
?>
