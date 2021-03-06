<?php
// Comprobamos que no se accede directamente a este fichero consultando una constante
defined('_APPINIT') or exit('Acceso restringido');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?> </title>
    <!-- FontAwesome, iconos -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Boostrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"> 
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/gestion-estudiantes/index.php" class="nav-link">Estudiantes</a></li>
                <li class="nav-item"><a href="/gestion-estudiantes/src/controllers/asignaturas.php" class="nav-link">Asignaturas</a></li>
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Profesores</a></li>
            </ul>
        </header>   
    </div>
    <div class="container">
    
      <table class="table">
      <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $i = 1;
          foreach ($profesores as $key => $value) {
              echo "<tr>";
              echo "<th>".$i."</th>";
              echo "<td>".$value["nombre"]."</td>";
              echo "<td>".$value["apellidos"]."</td>";                           
              echo "</tr>";              
              $i++;
          }
        ?>

        </tbody>
    </table>
    </div>
</body>
</html>