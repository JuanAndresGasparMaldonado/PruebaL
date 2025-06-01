<?php
include("conexion.php");
$id = $_GET['id'];
$resultado = mysqli_query($conexion, "SELECT * FROM jugadores WHERE id=$id");
$fila = mysqli_fetch_assoc($resultado);
?>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"><br>
    Edad: <input type="number" name="edad" value="<?php echo $fila['edad']; ?>"><br>
    Ranking: <input type="number" name="ranking" value="<?php echo $fila['ranking']; ?>"><br>
    Mano: <input type="text" name="mano" value="<?php echo $fila['mano']; ?>"><br>
    Fecha: <input type="date" name="fecha" value="<?php echo $fila['fecha']; ?>"><br>
    <input type="submit" value="Actualizar">
</form>
