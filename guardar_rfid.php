<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Cargar variables de entorno desde Railway
$host = getenv("DB_SERVER") ?: "NO DEFINIDO";
$port = getenv("DB_PORT") ?: "3306";
$username = getenv("DB_USER") ?: "NO DEFINIDO";
$password = getenv("DB_PASSWORD") ?: "NO DEFINIDO";
$database = getenv("DB_NAME") ?: "NO DEFINIDO";

echo "<strong>🔍 Debugging Variables:</strong><br>";
echo "Servidor: $host<br>";
echo "Puerto: $port<br>";
echo "Usuario: $username<br>";
echo "Contraseña: " . ($password === "NO DEFINIDO" ? "NO DEFINIDO" : "********") . "<br>";
echo "Base de datos: $database<br>";

if ($host === "NO DEFINIDO" || $username === "NO DEFINIDO" || $password === "NO DEFINIDO" || $database === "NO DEFINIDO") {
    die("❌ ERROR: Variables de entorno no definidas correctamente en Railway.");
}

// Intentar conectar a la base de datos
try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$database", $username, $password);
    echo "✅ Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>
