<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "junction.proxy.rlwy.net";
$port = "52331";
$username = getenv("MYSQLUSER") ?: "NO DEFINIDO";
$password = getenv("MYSQLPASSWORD") ?: "NO DEFINIDO";
$database = getenv("MYSQLDATABASE") ?: "NO DEFINIDO";

echo "Servidor: $host<br>";
echo "Puerto: $port<br>";
echo "Usuario: $username<br>";
echo "Contraseña: " . ($password === "NO DEFINIDO" ? "NO DEFINIDO" : "********") . "<br>";
echo "Base de datos: $database<br>";

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    echo "✅ Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>
