<?php
include("conexion.php");
$con=conectar();

$id_pedido=$_POST['id_pedido'];
$descripccion=$_POST['descripccion'];
$destino=$_POST['destino'];
$met_pago=$_POST['met_pago'];
$propina=$_POST['propina'];
$total=$_POST['total'];
$fecha=$_POST['fecha'];

$sql="INSERT INTO pedidos(id_pedido, descripccion, destino, met_pago, propina, total, fecha) 
VALUES ('$id_pedido','$descripccion','$destino','$met_pago','$propina','$total','$fecha')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: pedido.php");
    
}else {
}
?>