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

$sql="UPDATE pedidos SET  descripccion='$descripccion',destino='$destino',met_pago='$met_pago',propina='$propina',total='$total',fecha='$fecha' WHERE id_pedido='$id_pedido'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: pedido.php");
    }
?>