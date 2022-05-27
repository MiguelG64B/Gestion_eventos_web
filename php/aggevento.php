<?php
include("conn.php");
$con=conectar();

$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$direccion=$_POST['direccion'];
$encargado=$_POST['encargado'];


$sql="INSERT INTO eventos VALUES('','$nombre','$fecha','$direccion','$encargado')";
$query= mysqli_query($con,$sql);

if($query){
    header("Location: ../inicio.php");
} else{
    
}