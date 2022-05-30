<?php
include("./php/conn.php");
$con = conectar();
$sql = "SELECT *  FROM eventos";
$sql2 = "SELECT *  FROM usuario";
$query = mysqli_query($con, $sql);
$query2 = mysqli_query($con, $sql2);
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
        <div class="row">

            <div class="col-md-3">
                <h1>Insertar datos</h1>
                <form action="./php/aggevento.php" method="POST">
    
                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                    <input type="date" class="form-control mb-3" name="fecha" placeholder="Fecha">
                    <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion">

                    <select name="encargado" id="">
                    <?php
                        while ($row2 = mysqli_fetch_array($query2)) {
                        ?>
                    <option value="<?php echo $row2['id'] ?>"><?php echo $row2['nombre'] ?> <?php echo $row2['Apellido'] ?></option>
                    <?php
                        }
                        ?>
                    </select>
    
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="col-md-8">
                <table class="table">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>Id_Evento</th>
                            <th>Nombre del evento</th>
                            <th>Fecha</th>
                            <th>Direccion</th>
                            <th>Encargado</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['id'] ?></th>
                                <th><?php echo $row['nombre'] ?></th>
                                <th><?php echo $row['fecha'] ?></th>
                                <th><?php echo $row['direccion'] ?></th>
                                <th><?php echo $row['Encargado'] ?></th>
                                <th><a href="./edivento.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
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
