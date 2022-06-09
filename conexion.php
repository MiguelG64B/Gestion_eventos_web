<?php

$mysql = new mysqli(
    "localhost",
    "root",
    "",
    "parcial3"
);

if($mysql->connect_error){
    die("La Conexion Fallo".$mysql->connect_error);
}
else{
    echo"Todo Esta Correcto";
}