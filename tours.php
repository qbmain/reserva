<?php
    $conn = mysqli_connect('localhost', 'root', '', 'dbtour');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link text-light bg-success" href="tours.html">Tours</a>
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
                <a class="nav-link text-light" href="mantenedor.php">Mantenedor master</a>
            </li>
        </ul>



    </nav>



    <div class="container">
        <h1>Bienvenido</h1><br>
        
        <?php
        $sql = "SELECT * from infotours";
        $result  = mysqli_query($conn, $sql);

        while($mostrar=mysqli_fetch_array($result)){
        ?>
       
            <h3><?php echo $mostrar['nombre']?></h3>
            <img src="<?php echo $mostrar['img']?>" alt="" width ="500" height="400">
            <p><?php echo $mostrar['descripcion']?></p>
            <button type="button" class="btn btn-success">Inscribirse</button>
            
        
        <?php
        }
        ?>

<!--
        <div>
            <h3> Nombre</h3>
            <img src="img/background.png" alt="" width="500" height="400">
            
            <p>
                Obcaecati quisquam illo nemo ea quis incidunt nostrum et error optio, suscipit itaque nesciunt
                provident?
                Atque sit totam voluptas accusantium ipsam optio.</p>
          
            <button type="button" class="btn btn-success">Inscribirse</button>
        </div>

        <div>
            <h3> Nombre</h3>
            <img src="img/andes-australes.jpg" alt="" width="500" height="400">
            <p>Ex quidem tenetur explicabo ratione! Fugiat, esse totam adipisci libero dolor porro, explicabo
                quaerat
                voluptas eaque aut maxime earum beatae asperiores ipsam?</p>
            <button type="button" class="btn btn-success">Inscribirse</button>
        </div>

        <div>
            <h3> Nombre</h3>
            <img src="img/area-natural-protegida.jpg" alt="" width="500" height="400">
            <p>Saepe rerum architecto inventore, ut ea est culpa corrupti deserunt voluptate eos debitis
                exercitationem
                quis
                hic facere quo quidem minus unde expedita?</p>
            <button type="button" class="btn btn-success">Inscribirse</button>
        </div>

        <div>
            <h3> Nombre</h3>
            <img src="img/Radal-Siete-Tazas-02.jpg" alt="" width="500" height="400">
            <p>Repudiandae, maiores sunt rerum cupiditate temporibus, nihil voluptates earum nam ratione
                praesentium
                labore
                eveniet, libero eligendi alias aspernatur asperiores! Error, delectus! Perspiciatis?</p>
            <button type="button" class="btn btn-success">Inscribirse</button>
        </div>


        </div>
        <br>


    -->
    </div>

    <h1>BR</h1>

    <footer class="bg-success">asdasd©</footer>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>