<?php
// Configuración de la base de datos con variables de entorno
$servername = $_ENV["DB_SERVER"] ?? "mysql.railway.internal";
$username   = $_ENV["DB_USER"] ?? "root";
$password   = $_ENV["DB_PASSWORD"] ?? "tu_contraseña"; // Reemplaza si es necesario
$dbname     = $_ENV["DB_NAME"] ?? "railway";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

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
?>
