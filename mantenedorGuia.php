<?php
    $conn = mysqli_connect('localhost','root','','dbtour');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<!--
3.Mantenedor de Guías:R5: Permite  crear  nuevos profesionales  a  cargo  de los  tour
actualizar  o  modificar  sus características  en  la  base  de  datos, hacer búsquedas
y el  bloqueo  de  ellos  para  nuevas transacciones si así se requiere,Debe considerar:
-Descripciones del guía
-incluyendo su fotografía.
-Currículo del profesional.
-Historial de tourque ha realizadopara la organización y los que actualmente tiene asignados.
-->

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
                <a class="nav-link text-light bg-success" href="mantenedorGuia.php">Mantenedor guias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="mantenedor.php">Mantenedor master</a>
            </li>
        </ul>
        
    </nav>


    <div class="container">

        <h1>Mantenedor Guia</h1>

        <form action="php/recibeGuia.php" method="POST">

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="Apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos">
            </div>
            <div class="form-group">
                <label for="rut">Rut</label>
                <input type="text" class="form-control" placeholder="ej: 12.345.678-9" id="rut" name="rut">
            </div>
            <div class="form-group">
                <label for="descripcion">descripcion</label>
                <textarea id="descripcion" class="form-control" name="descripcion" rows="5"
                    placeholder="descripcion del guia"></textarea>
            </div>
            <div class="form-group">
                <label for="imagenPerfil">Imagen de perfil</label>
                <input type="file" class="form-control" id="imagenPerfil" name="imagenPerfil">
            </div>
            <div class="form-group">
                <label for="curriculo">Curriculo</label>
                <input type="file" class="form-control" id="curriculo" name="curriculo">
            </div>
            <div class="form-group">
                <label for="tourRealizados">Tours realizados</label>

                <!--
                <textarea class="form-control" id="tourRealizados" name="tourRealizados" rows="5"
                    placeholder="descripcion del guia"></textarea>
                -->
                <?php
                $sql = "SELECT nombre from infotours";
                $result = mysqli_query($conn,$sql);
                while($mostrar=mysqli_fetch_array($result)){ 
            ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkRealizados" name="checkRealizados">
                        <label class="form-check-label" for="checkRealizados">
                            <?php echo $mostrar['nombre'] ?>
                        </label>
                    </div>
            <?php  
                }
            ?>
            </div>

            <div class="form-group">
                <label for="tourAsignados">Tours asignados</label>

                <!--
                <textarea id="tourAsignados" class="form-control" name="tourAsignados" rows="5"
                    placeholder="descripcion del guia"></textarea>
                -->
            <?php
                $sql = "SELECT nombre from infotours";
                $result = mysqli_query($conn,$sql);
                while($mostrar=mysqli_fetch_array($result)){ 
            ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkAsignado" name="checkAsignado">
                        <label class="form-check-label" for="checkAsignado">
                            <?php echo $mostrar['nombre'] ?>
                        </label>
                    </div>


            <?php  
                }
            ?>
            </div>
            <!--
            <div class="form-group">
                <label for="tourRealizados">Tours Realizados</label>
                <div class="form-check" id="tourAsignados">
                    <input class="form-check-input" type="checkbox" value="" id="tourRealizado1">
                    <label class="form-check-label" for="tourRealizado1">tour 1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="tourRealizado2">
                    <label class="form-check-label" for="tourRealizado2">tour 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="tourRealizado3">
                    <label class="form-check-label" for="tourRealizado3">tour 3</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="tourRealizado4">
                    <label class="form-check-label" for="tourRealizado4">tour 4</label>
                </div>
            </div>
            

            <div class="form-group">
                <label for="tourAsignados">Tours asginados</label>
                <div class="form-check" id="tourAsignados">
                    <input class="form-check-input" type="checkbox" value="" id="tourAsignado1">
                    <label class="form-check-label" for="tourAsignado1">tour 1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="tourAsignado2">
                    <label class="form-check-label" for="tourAsignado2">tour 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="tourAsignado3">
                    <label class="form-check-label" for="tourAsignado3">tour 3</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="tourAsignado4">
                    <label class="form-check-label" for="tourAsignado4">tour 4</label>
                </div>
            </div>
            -->
            <button type="button" class="btn btn-danger">Cancelar</button>
            <button type="submit" class="btn btn-success">Guardar</button>

        </form>



    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>