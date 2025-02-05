<?php
// Intentar obtener la URL del servicio desde Railway
$servername = getenv("RAILWAY_SERVICE_MYSQL_URL") ?: "NO DEFINIDO";
$port       = "3306"; // Railway usa por defecto 3306
$username   = "root"; // Railway normalmente usa 'root'
$password   = getenv("MYSQLPASSWORD") ?: "NO DEFINIDO";
$database   = getenv("MYSQL_DATABASE") ?: "NO DEFINIDO";

// Mostrar variables obtenidas
echo "Servidor: $servername<br>";
echo "Usuario: $username<br>";
echo "Contraseña: $password<br>";
echo "Base de datos: $database<br>";
echo "Puerto: $port<br>";

// Intentar conectar
try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conexión exitosa";
} catch (PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>
