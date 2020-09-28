<?php
  $conn = mysqli_connect('localhost', 'root', '', 'dbtour');
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-dark bg-dark">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link text-light" href="tours.php">Tours</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="mantenedorTour.html">Mantenedor tour</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="mantenedorVisitantes.html">Mantenedor visita</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="mantenedorGuia.php">Mantenedor guias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light bg-success" href="mantenedor.html">Mantenedor master</a>
      </li>
    </ul>

  </nav>

  <br>
  <div class="container">
      <Label>Buscar:</Label>
      <input type="search" name="busqueda" id="busqueda">
      <button type="button" class="btn btn-warning">Buscar</button>

      <button type="button" class="btn btn-dark"><a href=".//mantenedorVisitantes.html" class="text-light">Crear nuevo participante</a>
      </button>
      <button type="button" class="btn btn-dark">Modificar participante</button>
      <button type="button" class="btn btn-danger">Bloquear</button>
    </div>
  </div>
  
  <br>
  <div class="container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Rut</th>
          <th scope="col">Correo</th>
          <th scope="col">Password</th>
          <th scope="col">Sexo</th>
          <th scope="col">Celular</th>
          <th scope="col">imagen</th>
          <th scope="col">     </th>
          <th scope="col">     </th>
        </tr>
      </thead>
      <tbody>

       
        <?php
        $sql = "SELECT * from infovisitantes";
        $result  = mysqli_query($conn, $sql);
        
        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr>
          <td><?php echo $mostrar['nombre']?></td>
          <td><?php echo $mostrar['rut']?></td>
          <td><?php echo $mostrar['correo']?></td>
          <td><?php echo $mostrar['pass']?></td>
          <td><?php echo $mostrar['sexo']?></td>
          <td><?php echo $mostrar['celular']?></td>
          <td><?php echo $mostrar['imagenPerfil']?></td>
          <td>  </td>
          <td><button type="button" class="btn btn-danger">eliminar</button></td>
        </tr>
        <?php
        }
        ?>

      </tbody>
    </table>
  </div>
  </table>


  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>