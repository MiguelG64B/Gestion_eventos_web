<?php
include("./php/conn.php");
session_start();

if(!isset($_SESSION['datos_login'])){
  header("Location: ./index.php");
}
$arregloUsuario = $_SESSION['datos_login'];
if($arregloUsuario['idtipousuario']!= '2'){ 
  header("Location: ./eventos.php");
}   

$arregloUsuario = $_SESSION['datos_login'];
$con = conectar();
$sql = "SELECT *  FROM eventos";
$sql2 = "SELECT *  FROM usuario";
$sql3 = "SELECT *  FROM reportes";
$query = mysqli_query($con, $sql);
$query2 = mysqli_query($con, $sql2);
$query3 = mysqli_query($con, $sql3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administracion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <?php
    include("./extra/header.php");
    ?>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <h1>Insertar datos</h1>
                <form action="./php/aggevento.php" method="POST" enctype="multipart/form-data">
    
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre evento">
                    <input type="number" class="form-control mb-3" name="costo" placeholder="Costo">
                    <input type="number" class="form-control mb-3" name="cupo" placeholder="Cupo">
                    <input type="datetime-local" class="form-control mb-3" name="fecha" placeholder="Fecha">
                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">

                    <input type="file" name="imagen" id="imagen">

                    <select name="encargado" id="">
                    <?php
                        while ($row2 = mysqli_fetch_array($query2)) {
                        ?>
                    <option value="<?php echo $row2['cedula'] ?>"><?php echo $row2['nombre'] ?> <?php echo $row2['apellido'] ?> <?php echo $row2['cedula'] ?></option>
                    <?php
                        }
                        ?>
                    </select>
    
                    <input type="submit" value="Crear evento" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Id Evento</th>
                            <th>CC encargado</th>
                            <th>Nombre evento</th>
                            <th>Costo</th>
                            <th>Aforo maximo</th>
                            <th>Direccion</th>
                            <th>Imagen</th>
                            <th>Fecha</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['idevento'] ?></th>
                                <th><?php echo $row['idtipousuario'] ?></th>
                                <th><?php echo $row['nombre'] ?></th>
                                <th><?php echo $row['costo'] ?></th>
                                <th><?php echo $row['cupo'] ?></th>
                                <th><?php echo $row['direccion'] ?></th>
                                <th><img src="<?php echo $row['imagen'] ?>" height="100px" width="100px"></th>
                                <th><?php echo $row['fecha'] ?></th>
                                <th><a href="./edivento.php?id=<?php echo $row['idevento'] ?>" class="btn btn-info">Editar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <h2><span class=" btn-warning">Reportes</span></h2>
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Id Reporte</th>
                            <th>Id Evento</th>
                            <th>Reporte</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row3 = mysqli_fetch_array($query3)) {
                        ?>
                            <tr>
                                <th><?php echo $row3['id_reporte'] ?></th>
                                <th><?php echo $row3['id_evento'] ?></th>
                                <th><?php echo $row3['reporte'] ?></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    
    </div>
</body>
</html>
