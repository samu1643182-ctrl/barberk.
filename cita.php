<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $servicio = $_POST["servicio"];
    $fecha = $_POST["fecha"];
    $hora = $_POST["hora"];

    $sql = "INSERT INTO citas (nombre, telefono, servicio, fecha, hora)
            VALUES ('$nombre', '$telefono', '$servicio', '$fecha', '$hora')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cita reservada con éxito');</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reservar Cita - BarberK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Reservar Cita</h2>

<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre completo" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>

    <select name="servicio" required>
        <option value="">Selecciona un servicio</option>
        <option>Corte Clásico</option>
        <option>Fade / Degradado</option>
        <option>Arreglo de Barba</option>
        <option>Combo Chinga</option>
    </select>

    <input type="date" name="fecha" required>
    <input type="time" name="hora" required>

    <button type="submit">Reservar</button>
</form>

<a href="index.php">Volver al inicio</a>

</body>
</html>




































