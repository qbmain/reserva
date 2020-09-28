<?php

$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$rut = $_POST["rut"];
$descripcion = $_POST["descripcion"];
$imagen = $_POST["imagenPerfil"];
$curriculo = $_POST["curriculo"];
$tourRealizados = $_POST["tourRealizados"];
$tourAsignados = $_POST["tourAsignados"];

//Creacion coneccion
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtour";

$conn = new mysqli($servername, $username,$password,$dbname);

//Revisar coneccion
if ($conn->connect_error) {
    die("Coneccion fallida:" . $conn->connect_error);

}

$sql = "INSERT INTO infoguias (nombre, apellidos, rut, descripcion, imagen, curriculo, tourRealizados, tourAsignados)
VALUES ('$nombre', '$apellidos', '$rut', '$descripcion', '$imagen', '$curriculo', '$tourRealizados', '$tourAsignados') ";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado con exito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>