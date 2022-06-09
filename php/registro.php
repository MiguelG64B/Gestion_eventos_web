<?php 
   include "conexion.php";
   if( isset($_POST['nombre'] ) && isset($_POST['correo']) && isset($_POST['pass'] ) 
    && isset($_POST['pass2'] ) &&  isset($_POST['apellido']) &&  isset($_POST['telefono'])
    &&  isset($_POST['cedula'])){
       
        $em= $conexion->query("SELECT correo FROM usuario WHERE correo = '".$_POST['correo']."'")or die($conexion->error);
        if(mysqli_num_rows($em)>0){
            header("Location: ../registro.php?error=correo ya registrado");
        }

        else{
        if($_POST['pass'] == $_POST['pass2'] ){
            $name=$_POST['nombre'];
            $correo=$_POST['correo'];
            $apellido=$_POST['apellido'];
            $telefono=$_POST['telefono'];
            $cedula=$_POST['cedula'];
            $pass=sha1($_POST['pass']);
                $conexion->query("insert into usuario ( idtipousuario,nombre,apellido,cedula,telefono,correo,contrasena) 
                    values('1','$name','$apellido','$cedula','$telefono','$correo','$pass')  ")or die($conexion->error);
                    header("Location: ../inicio.php");
        }else{
           
        header("Location: ../registro.php?error=password  incorrectas");
        }
    }
}
?>