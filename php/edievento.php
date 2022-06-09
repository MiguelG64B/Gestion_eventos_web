<?php

include("conn.php");
$con=conectar();

$idevento=$_POST['idevento'];
$idtipousuario=$_POST['idtipousuario'];
$nombre=$_POST['nombre'];
$cupo=$_POST['cupo'];
$costo=$_POST['costo'];
$imagen=$_FILES['imagen']['name'];
$temp=$_FILES['imagen']['tmp_name'];
$fecha=$_POST['fecha'];
$direccion=$_POST['direccion'];

$carpeta='../img';
$ruta=$carpeta.'/'.$imagen;

move_uploaded_file($temp,$carpeta.'/'.$imagen);


$sql="UPDATE eventos SET nombre='$nombre',cupo='$cupo',costo='$costo',direccion='$direccion',fecha='$fecha',imagen='$ruta' WHERE idevento ='$idevento'";
$query=mysqli_query($con,$sql);

if($query){
        header("Location: ../inicio.php");
}
?>