<?php
include("conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$ranking = $_POST['ranking'];
$mano = $_POST['mano'];
$fecha = $_POST['fecha'];

$sql = "UPDATE jugadores SET nombre='$nombre', edad='$edad', ranking='$ranking', mano='$mano', fecha='$fecha' WHERE id=$id";

if (mysqli_query($conexion, $sql)) {
    echo "Jugador actualizado. <a href='mostrar.php'>Volver</a>";
} else {
    echo "Error: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
