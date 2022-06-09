<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Mal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <div class="container-fluid">
     <a class="navbar-brand" href="../inicio.php"><img src="../img/logo.png"  height="50px" width="50px">Gestion de eventos</a>
     <li class="nav-item">
       <a href="../php/cerrar_sesion.php" class="nav-link">
         <p>
           Salir
         </p>
       </a>
     </li>
 </div>
</nav>  

<div class="card text-center">
  <div class="alert alert-danger" role="alert">
  Oh no!!
</div>
  <div class="card-body">
    <h5 class="card-title">El usuario no fue registrado al evento por falta de cupos</h5>
    <a href="../inicio.php" class="btn btn-primary">Volver al home</a>
  </div>
</div>

</body>
</html>