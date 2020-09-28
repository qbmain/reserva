<?php
$nombre = $_POST["nombre"];
$rut = $_POST["rut"];
$correo = $_POST["correo"];
$contraseña = $_POST["clave"];
$sexo = $_POST["sexo"];
$celular = $_POST["celular"];
$imagen = $_POST["imagenPerfil"];

//Crear coneccion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtour";

$conn = new mysqli($servername, $username,$password,$dbname);

//Revisar coneccion
if ($conn->connect_error) {
    die("Coneccion fallida:" . $conn->connect_error);

}

$sql = "INSERT INTO infovisitantes (nombre, rut, correo, pass, sexo, celular, imagenPerfil)
VALUES ('$nombre','$rut','$correo', '$contraseña', '$sexo', '$celular', '$imagen')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado con exito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>