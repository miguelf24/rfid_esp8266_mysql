<?php
$servername = "tu_host";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener datos de la ESP8266
$id = $_GET['id'];
$rfid = $_GET['rfid'];

// Insertar en la base de datos
$sql = "INSERT INTO rfid_data (id, rfid) VALUES ('$id', '$rfid')";
if ($conn->query($sql) === TRUE) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
