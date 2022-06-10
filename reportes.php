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
        <h2>Reporte al evento: <span class=" btn-warning"><?php echo $row['idevento']?></span></h2>

        <form action="./php/reportes.php" method="POST" REQUIRED>
            
            <input type="hidden" name="idevento" value="<?php echo $row['idevento']?>">
            
            <input type="text" class="form-control mb-3" name="reporte" placeholder="Por favor cuentanos que paso..." REQUIRED>

            <input type="submit" class="btn btn-primary btn-block" value="Enviar reporte">
        </form>

    </div>
</body>
</html>
