<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  <!-- partial:index.partial.html -->
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active">Iniciar sesion</h2>


      <!-- Login Form -->
      <form action="./php/inicio.php" method="post">
        <input type="text" id="correo" class="fadeIn second" name="email" placeholder="email">
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Iniciar sesion">
        <a href="registro.php">Registrarse</a>

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