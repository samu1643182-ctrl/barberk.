
<?php
include("config.php");
$result = $conn->query("SELECT * FROM citas ORDER BY fecha, hora");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel Admin - BarberK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Lista de Citas</h2>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Teléfono</th>
        <th>Servicio</th>
        <th>Fecha</th>
        <th>Hora</th>
    </tr>

    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $row["nombre"]; ?></td>
        <td><?php echo $row["telefono"]; ?></td>
        <td><?php echo $row["servicio"]; ?></td>
        <td><?php echo $row["fecha"]; ?></td>
        <td><?php echo $row["hora"]; ?></td>
    </tr>
    <?php } ?>

</table>

<a href="index.php">Volver</a>

</body>
</html>

























































