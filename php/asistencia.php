<?php

include("conn.php");
$con=conectar();


$idevento=$_POST['idevento'];
$idusuario=$_POST['idusuario'];
$correo=$_POST['correo'];

$sql2 = "SELECT * FROM eventos WHERE idevento ='$idevento'";
$query2 = mysqli_query($con, $sql2);
$rowU = mysqli_fetch_array($query2);

$cupo=$rowU['cupo'];
if($cupo>=0){
    $sql="INSERT INTO asistencia VALUES('','$idevento','$idusuario','$correo')";
    $query= mysqli_query($con,$sql);
    if($query){
        header("Location: ../todolisto.php");
    }
}else{
    header("Location: ../todomal.php");
}
?>