<?php
// Obtener variables de entorno de Railway
$servername = getenv("MYSQLHOST") ?: "NO DEFINIDO";
$username   = getenv("MYSQLUSER") ?: "NO DEFINIDO";
$password   = getenv("MYSQLPASSWORD") ?: "NO DEFINIDO";
$dbname     = getenv("MYSQL_DATABASE") ?: "NO DEFINIDO";
$port       = getenv("MYSQLPORT") ?: "3306"; // Por defecto, MySQL usa el puerto 3306

// Mostrar las variables obtenidas
echo "Servidor: $servername<br>";
echo "Usuario: $username<br>";
echo "Contraseña: $password<br>";
echo "Base de datos: $dbname<br>";
echo "Puerto: $port<br>";

// Intentar conexión a la base de datos
try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conexión exitosa";
} catch(PDOException $e) {
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>
