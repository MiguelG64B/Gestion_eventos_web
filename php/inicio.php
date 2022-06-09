<?php 
session_start();
include "./conexion.php";

if(  isset($_POST['correo'])  && isset($_POST['contrasena'])  ){
    
    $resultado = $conexion->query("select * from usuario where 
        correo='".$_POST['correo']."' and 
        contrasena='".$_POST['contrasena']."' limit 1")or die($conexion->error);
        
        if(mysqli_num_rows($resultado)>0 ){
            $datos_usuario = mysqli_fetch_row($resultado); 
            $idtipousuario= $datos_usuario[1];
            $nombre= $datos_usuario[2];
            $apellido= $datos_usuario[3];
            $cedula= $datos_usuario[4];
            $direccion= $datos_usuario[5];
            $telefono= $datos_usuario[6];
            $correo= $datos_usuario[7];
         
            $_SESSION['datos_login']= array(
                'idtipousuario'=>$idtipousuario,
                'nombre'=>$nombre,
                'apellido'=>$apellido,
                'cedula'=>$cedula,
                'direccion'=>$direccion,
                'telefono'=>$telefono,
                'correo'=>$correo 
            );
            header("Location: ../inicio.php");
        }

    else{
        header("Location: ../index.php?error=Credenciales incorrectas");
    }



}else{
    header("./index.php");
}



?>