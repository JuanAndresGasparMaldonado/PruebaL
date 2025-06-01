<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Jugadores</title>
</head>
<body>
    <h1>Formulario de Jugadores</h1>
    <form action="insertar.php" method="POST">
        <table border="1">
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" required></td>
            </tr>
            <tr>
                <td>Edad:</td>
                <td><input type="number" name="edad" required></td>
            </tr>
            <tr>
                <td>Ranking:</td>
                <td><input type="number" name="ranking" required></td>
            </tr>
            <tr>
                <td>Mano Dominante:</td>
                <td>
                    <select name="mano">
                        <option value="Derecha">Derecha</option>
                        <option value="Izquierda">Izquierda</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Fecha de inscripción:</td>
                <td><input type="date" name="fecha" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>

    <p><a href="mostrar.php">Ver Jugadores</a></p>
    <p><a href="consultas.php">Consultas personalizadas</a></p>
</body>
</html>
