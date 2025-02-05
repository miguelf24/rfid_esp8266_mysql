<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = getenv("MYSQLHOST") ?: "NO DEFINIDO";
$username   = getenv("MYSQLUSER") ?: "NO DEFINIDO";
$password   = getenv("MYSQLPASSWORD") ?: "NO DEFINIDO";
$database   = getenv("MYSQLDATABASE") ?: "NO DEFINIDO";
$port       = getenv("MYSQLPORT") ?: "3306";

echo "Servidor: $servername<br>";
echo "Usuario: $username<br>";
echo "Contraseña: " . ($password === "NO DEFINIDO" ? "NO DEFINIDO" : "********") . "<br>";
echo "Base de datos: $database<br>";
echo "Puerto: $port<br>";

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    echo "✅ Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>
