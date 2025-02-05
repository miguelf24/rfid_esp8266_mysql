<?php
$servername = getenv("DB_SERVER") ?? "NO DEFINIDO";
$username   = getenv("DB_USER") ?? "NO DEFINIDO";
$password   = getenv("DB_PASSWORD") ?? "NO DEFINIDO";
$dbname     = getenv("DB_NAME") ?? "NO DEFINIDO";
$port       = getenv("DB_PORT") ?? "NO DEFINIDO";

// Intenta conectarte a la base de datos
try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión exitosa";
} catch(PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
