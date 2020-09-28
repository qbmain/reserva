<?php
    $conn = mysqli_connect('localhost','root','','dbtour');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>

    <?php
        $sql = "SELECT * from infoguias";
        $result = mysqli_query($conn,$sql);
        while($mostrar=mysqli_fetch_array($result)){
    ?>
    <tr>
        <td><?php ?></td>
        <td><?php echo $mostrar['nombre']?></td>
        <td><?php echo $mostrar['apellidos']?></td>
        <td><?php echo $mostrar['rut']?></td>
        <td><?php echo $mostrar['descripcion']?></td>
        <td><?php echo $mostrar['imagen']?></td>
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>