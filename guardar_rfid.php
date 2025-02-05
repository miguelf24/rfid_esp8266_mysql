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

// Verificar si las variables existen
if (!$servername || !$username || !$password || !$dbname || !$port) {
    die("❌ Error: Variables de entorno no definidas.");
}

// Crear conexión segura
$conn = new mysqli($servername, $username, $password, $dbname, intval($port));

// Verificar conexión
if ($conn->connect_error) {
    die("❌ Error de conexión: " . $conn->connect_error);
}

// Verificar si los datos fueron enviados correctamente
if (isset($_GET['N']) && isset($_GET['rfid'])) {
    // Limpiar datos para evitar inyección SQL
    $N = $conn->real_escape_string($_GET['N']);
    $rfid = $conn->real_escape_string($_GET['rfid']);

    // Insertar en la base de datos
    $sql = "INSERT INTO rfid_data2 (N, rfid) VALUES ('$N', '$rfid')";

    if ($conn->query($sql) === TRUE) {
        echo "✅ Datos guardados correctamente";
    } else {
        echo "❌ Error en la inserción: " . $conn->error;
    }
} else {
    echo "⚠️ Error: Faltan datos en la solicitud.";
}

// Cerrar conexión
$conn->close();

