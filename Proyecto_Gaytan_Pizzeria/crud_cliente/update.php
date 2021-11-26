<?php

include("conexion.php");
$con=conectar();

$id_cliente=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$direccion=$_POST['direccion'];
$cp=$_POST['cp'];

$sql="UPDATE cliente SET  nombre='$nombre',apellidos='$apellidos',telefono='$telefono',correo='$correo',direccion='$direccion',cp='$cp' WHERE id_cliente='$id_cliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
    }
?>