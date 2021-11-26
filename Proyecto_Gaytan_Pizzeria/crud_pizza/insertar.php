<?php
include("conexion.php");
$con=conectar();

$id_pizza=$_POST['id_pizza'];
$masa=$_POST['masa'];
$tamano=$_POST['tamano'];
$salsa=$_POST['salsa'];
$queso=$_POST['queso'];
$ingredientes=$_POST['ingredientes'];
$adicionales=$_POST['adicionales'];


$sql="INSERT INTO pizza(id_pizza, masa, tamano, salsa, queso, ingredientes, adicionales) 
VALUES ('$id_pizza','$masa','$tamano','$salsa','$queso','$ingredientes','$adicionales')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: pizza.php");
    
}else {
}
?>