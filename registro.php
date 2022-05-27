<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active">Registro</h2>


            <!-- Login Form -->
            <form action="./php/registro.php" method="post">
                <input type="text" id="nombre" class="fadeIn second" name="nombre" placeholder="Nombre" required>
                <input type="text" id="apellido" class="fadeIn second" name="apellido" placeholder="Apellido" required>
                <input type="text" id="telefono" class="fadeIn second" name="telefono" placeholder="Telefono" required>
                <input type="text" id="ciudad" class="fadeIn second" name="ciudad" placeholder="Ciudad" required>
                <input type="text" id="estado" class="fadeIn second" name="estado" placeholder="Departamento"required>
                <input type="text" id="direccion" class="fadeIn second" name="direccion" placeholder="Direccion" required>
                <input type="text" id="correo" class="fadeIn second" name="email" placeholder="email"required>
                <input type="password" id="pass" class="fadeIn third" name="pass" placeholder="password"required>
                <input type="password" id="pass2" class="fadeIn third" name="pass2" placeholder="Confirma password"required>
                <input type="submit" class="fadeIn fourth" value="Registrarse">
                <a href="index.php">¿ Ya tienes una cuenta ?</a>

                <?php
                if (isset($_GET['error'])) {
                    echo '<div class="col-12 alert alert-danger">' . $_GET['error'] . '</div>';
                }
                ?>
                <?php
                if (isset($_GET['todobien'])) {
                    echo '<div class="col-12 alert alert-success">' . $_GET['todobien'] . '</div>';
                }
                ?>
            </form>

            <!-- Remind Passowrd -->

        </div>
    </div>
    <!-- partial -->

</body>

</html>