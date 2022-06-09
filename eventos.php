<?php
include("./php/conn.php");
$con = conectar();

$sql2 = "SELECT *  FROM usuario";
$query2 = mysqli_query($con, $sql2);
$rowU = mysqli_fetch_array($query2);

$idusuario=$rowU['cedula'];

$sql = "SELECT *  FROM eventos WHERE idtipousuario ='$idusuario'";
$query = mysqli_query($con, $sql);

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
            <div class="col-md-8">
            <h2>Eventos a mi nombre: <span class=" btn-warning"><?php echo $rowU['nombre']; ?></span></h2>
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
                                <th><a href="./reportes.php?id=<?php echo $row['idevento'] ?>" class="btn btn-warning">Realizar reportar</a></th>
                                <th><a href="./php/correo_recordartorio.php?id=<?php echo $row['idevento'] ?>" class="btn btn-info">Enviar recordatorio</a></th>
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
