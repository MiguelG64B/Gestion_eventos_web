<?php
include("./php/conn.php");
$con = conectar();

$id_u =$_GET['id'];

$sql = "SELECT * FROM eventos WHERE idevento ='$id_u'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Editar evento</title>
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
        <form action="./php/edievento.php" method="POST" enctype="multipart/form-data"  REQUIRED>

            <input type="hidden" name="idevento" value="<?php echo $row['idevento']?> ">
            
            <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>" REQUIRED>
            <input type="number" class="form-control mb-3" name="costo" placeholder="Costo"  value="<?php echo $row['costo']  ?>" REQUIRED>
            <input type="number" class="form-control mb-3" name="cupo" placeholder="Cupo" value="<?php echo $row['cupo']  ?>" REQUIRED>
            <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']  ?>" REQUIRED>
            <input type="datetime-local" class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>" REQUIRED>
            <input type="file" name="imagen" id="imagen" REQUIRED>
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>
</html>
