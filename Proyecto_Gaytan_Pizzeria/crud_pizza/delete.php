<?php

include("conexion.php");
$con=conectar();

$id_pizza=$_GET['id'];

$sql="DELETE FROM pizza  WHERE id_pizza='$id_pizza'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pizza.php");
    }
?>
