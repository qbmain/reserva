<?php
$nombre = $_POST["nombreTour"];
$descripcion = $_POST["descripcion"];
$imagen = $_POST["imagen"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtour";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO infotours (nombre, descripcion, img)
VALUES ('$nombre', '$descripcion', '$imagen')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>