<?php

include("conn.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$direccion=$_POST['direccion'];
$encargado=$_POST['encargado'];

$sql="UPDATE usuario SET  nombre='$nombre',fecha='$fecha',direccion='$direccion',encargado='$encargado' WHERE id ='$id'";
$query=mysqli_query($con,$sql);

if($query){
        header("Location: ../inicio.php");
}
?>