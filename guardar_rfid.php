<?php
$servername = $_ENV["DB_SERVER"] ?? "NO DEFINIDO";
$username   = $_ENV["DB_USER"] ?? "NO DEFINIDO";
$password   = $_ENV["DB_PASSWORD"] ?? "NO DEFINIDO";
$dbname     = $_ENV["DB_NAME"] ?? "NO DEFINIDO";
$port       = $_ENV["DB_PORT"] ?? "NO DEFINIDO";

echo "Servidor: $servername<br>";
echo "Usuario: $username<br>";
echo "Contraseña: $password<br>";
echo "Base de datos: $dbname<br>";
echo "Puerto: $port<br>";
?>

