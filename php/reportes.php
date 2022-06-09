<?php
include("conn.php");
$con=conectar();

$idevento=$_POST['idevento'];
$reporte=$_POST['reporte'];



$sql="INSERT INTO reportes VALUES('','$idevento','$reporte')";
$query= mysqli_query($con,$sql);

if($query){
    header("Location: ../eventos.php");
} else{
    
}