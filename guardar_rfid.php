<?php
// Obtener credenciales desde Railway (Variables de entorno)
$servername = $_ENV["DB_SERVER"] ?? "mysql.railway.internal";
$username   = $_ENV["DB_USER"] ?? "tu_usuario_mysql";
$password   = $_ENV["DB_PASSWORD"] ?? "tu_contraseña_mysql";
$dbname     = $_ENV["DB_NAME"] ?? "tu_nombre_de_base_de_datos";
$port       = $_ENV["DB_PORT"] ?? "3306";  // Puerto por defecto

// Crear conexión segura
$conn = new mysqli($servername, $username, $password, $dbname, $port);

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
