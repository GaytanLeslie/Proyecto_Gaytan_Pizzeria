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

$sql="UPDATE empleado SET  nombre='$nombre',apellidos='$apellidos',domicilio='$domicilio',telefono='$telefono',correo='$correo',sueldo='$sueldo' WHERE id_empleado='$id_empleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>