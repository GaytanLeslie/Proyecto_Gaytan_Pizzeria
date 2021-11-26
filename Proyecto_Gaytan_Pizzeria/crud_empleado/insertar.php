<?php
include("conexion.php");
$con=conectar();

$id_empleado=$_POST['id_empleado'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$domicilio=$_POST['domicilio'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$sueldo=$_POST['sueldo'];


$sql="INSERT INTO empleado(id_empleado, nombre, apellidos, domicilio, telefono, correo, sueldo) 
VALUES ('$id_empleado','$nombre','$apellidos','$domicilio','$telefono','$correo','$sueldo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>