<?php
$servername = "mysql.railway.internal";
$username = "root";
$password = "tmQCZVBbxdsdhlWurEdNCPWugNDZJoer";
$dbname = "railway";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si los datos fueron enviados
if (isset($_GET['N']) && isset($_GET['rfid'])) {
    // Limpiar datos para evitar inyección SQL
    $N = mysqli_real_escape_string($conn, $_GET['N']);
    $rfid = mysqli_real_escape_string($conn, $_GET['rfid']);

    // Insertar en la base de datos
    $sql = "INSERT INTO rfid_data2 (N, rfid) VALUES ('$N', '$rfid')";

    if ($conn->query($sql) === TRUE) {
        echo "Datos guardados correctamente";
    } else {
        echo "Error en la inserción: " . $conn->error;
    }
} else {
    echo "Error: Faltan datos.";
}

// Cerrar conexión
$conn->close();
?>
