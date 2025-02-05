<?php
$servername = $_SERVER["DB_SERVER"] ?? "NO DEFINIDO";
$username   = $_SERVER["DB_USER"] ?? "NO DEFINIDO";
$password   = $_SERVER["DB_PASSWORD"] ?? "NO DEFINIDO";
$dbname     = $_SERVER["DB_NAME"] ?? "NO DEFINIDO";
$port       = $_SERVER["DB_PORT"] ?? "NO DEFINIDO";

echo "Servidor: $servername<br>";
echo "Usuario: $username<br>";
echo "Contraseña: $password<br>";
echo "Base de datos: $dbname<br>";
echo "Puerto: $port<br>";
?>

