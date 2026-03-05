
<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$especialidad = $_POST['especialidad'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO barberos (nombre, telefono, email, especialidad, password)
VALUES ('$nombre', '$telefono', '$email', '$especialidad', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Barbero registrado correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();


































