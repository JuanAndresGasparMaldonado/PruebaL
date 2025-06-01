<?php
include("conexion.php");

$resultado = mysqli_query($conexion, "SELECT * FROM jugadores");

echo "<h1>Listado de Jugadores</h1>";
echo "<table border='1'><tr><th>ID</th><th>Nombre</th><th>Edad</th><th>Ranking</th><th>Mano</th><th>Fecha</th><th>Acciones</th></tr>";
while($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>
            <td>{$fila['id']}</td>
            <td>{$fila['nombre']}</td>
            <td>{$fila['edad']}</td>
            <td>{$fila['ranking']}</td>
            <td>{$fila['mano']}</td>
            <td>{$fila['fecha']}</td>
            <td>
                <a href='editar.php?id={$fila['id']}'>Editar</a> | 
                <a href='eliminar.php?id={$fila['id']}' onclick='return confirm(\"¿Estás seguro de borrar?\")'>Eliminar</a>
            </td>
          </tr>";
}
echo "</table>";

mysqli_close($conexion);
?>
