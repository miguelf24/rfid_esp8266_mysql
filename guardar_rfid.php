<?php
// Obtener credenciales de Railway (Usando variables de entorno)
$servername = getenv("DB_SERVER");
$username   = getenv("DB_USER");
$password   = getenv("DB_PASSWORD");
$dbname     = getenv("DB_NAME");
$port       = getenv("DB_PORT");

<?php
echo "DB_SERVER: " . getenv("DB_SERVER") . "<br>";
echo "DB_USER: " . getenv("DB_USER") . "<br>";
echo "DB_PASSWORD: " . getenv("DB_PASSWORD") . "<br>";
echo "DB_NAME: " . getenv("DB_NAME") . "<br>";
echo "DB_PORT: " . getenv("DB_PORT") . "<br>";
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
?>
