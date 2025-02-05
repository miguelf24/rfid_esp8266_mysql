<?php
$servername = $_getenv["DB_SERVER"] ?? "NO DEFINIDO";
$username   = $_getenv["DB_USER"] ?? "NO DEFINIDO";
$password   = $_getenv["DB_PASSWORD"] ?? "NO DEFINIDO";
$dbname     = $_getenv["DB_NAME"] ?? "NO DEFINIDO";
$port       = $_getenv["DB_PORT"] ?? "NO DEFINIDO";

echo "Servidor: $servername<br>";
echo "Usuario: $username<br>";
echo "Contraseña: $password<br>";
echo "Base de datos: $dbname<br>";
echo "Puerto: $port<br>";
?>

