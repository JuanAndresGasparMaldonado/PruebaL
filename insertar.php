<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$ranking = $_POST['ranking'];
$mano = $_POST['mano'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO jugadores (nombre, edad, ranking, mano, fecha) VALUES ('$nombre', '$edad', '$ranking', '$mano', '$fecha')";

if (mysqli_query($conexion, $sql)) {
    echo "Jugador insertado correctamente. <a href='mostrar.php'>Ver jugadores</a>";
} else {
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
