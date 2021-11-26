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


$sql="INSERT INTO cliente(id_cliente, nombre, apellidos, telefono, correo, direccion, cp) 
VALUES ('$id_cliente','$nombre','$apellidos','$telefono','$correo','$direccion','$cp')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
    
}else {
}
?>