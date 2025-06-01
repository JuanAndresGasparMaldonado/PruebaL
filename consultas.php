<?php
include("conexion.php");

echo "<h2>Jugadores con ranking mayor a 100</h2>";
$res = mysqli_query($conexion, "SELECT * FROM jugadores WHERE ranking > 100");
while($fila = mysqli_fetch_assoc($res)) {
    echo $fila['nombre']." (Ranking: ".$fila['ranking'].")<br>";
}

echo "<h2>Jugadores zurdos</h2>";
$res = mysqli_query($conexion, "SELECT * FROM jugadores WHERE mano='Izquierda'");
while($fila = mysqli_fetch_assoc($res)) {
    echo $fila['nombre']." (Mano: ".$fila['mano'].")<br>";
}

echo "<h2>Jugadores inscritos en el último mes</h2>";
$res = mysqli_query($conexion, "SELECT * FROM jugadores WHERE fecha >= DATE_SUB(CURDATE(), INTERVAL 1 MONTH)");
while($fila = mysqli_fetch_assoc($res)) {
    echo $fila['nombre']." (Fecha: ".$fila['fecha'].")<br>";
}

mysqli_close($conexion);
?>
