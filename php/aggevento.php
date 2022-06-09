<?php
include("conn.php");
$con=conectar();

$nombre=$_POST['nombre'];
$fecha=$_POST['fecha'];
$costo=$_POST['costo'];
$imagen=$_FILES['imagen']['name'];
$temp=$_FILES['imagen']['tmp_name'];
$cupo=$_POST['cupo'];
$encargado=$_POST['encargado'];
$direccion=$_POST['direccion'];


$carpeta='../img';
$ruta=$carpeta.'/'.$imagen;

move_uploaded_file($temp,$carpeta.'/'.$imagen);


$sql="INSERT INTO eventos VALUES('','$encargado','$nombre','$cupo','$costo','$direccion','$fecha','$ruta')";
$query= mysqli_query($con,$sql);

if($query){
    header("Location: ../inicio.php");
} else{
    
}
?>
