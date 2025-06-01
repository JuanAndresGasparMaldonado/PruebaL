<?php
$servidor = "localhost";
$usuario = "root";
$pass = "";
$bd = "tenis";

$conexion = mysqli_connect($servidor, $usuario, $pass, $bd);

if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
