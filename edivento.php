<?php
include("./php/conn.php");
$con = conectar();

$id_u = $_GET['id'];

$sql = "SELECT * FROM eventos WHERE id ='$id_u'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>

<body>
    <?php
    include("header.php");
    ?>
        <div class="container mt-5">
        <form action="./php/edievento.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
            <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
            <input type="date" class="form-control mb-3" name="fecha" placeholder="fecha" value="<?php echo $row['fecha']  ?>">
            <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="<?php echo $row['direccion']  ?>">
            <input type="number" class="form-control mb-3" name="encargado" placeholder="encargado" value="<?php echo $row['encargado']  ?>">
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</body>
</html>
