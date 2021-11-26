<?php

include("conexion.php");
$con=conectar();

$id_pizza=$_POST['id_pizza'];
$masa=$_POST['masa'];
$tamaño=$_POST['tamano'];
$salsa=$_POST['salsa'];
$queso=$_POST['queso'];
$ingredientes=$_POST['ingredientes'];
$adicionales=$_POST['adicionales'];

$sql="UPDATE pizza SET  masa='$masa',tamano='$tamano',salsa='$salsa',queso='$queso',ingredientes='$ingredientes',adicionales='$adicionales' WHERE id_pizza='$id_pizza'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pizza.php");
    }
?>