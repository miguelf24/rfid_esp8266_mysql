<?php
// Configuración de la base de datos (Railway)
$host = "mysql-production-a8d6.up.railway.app"; // Cambia esto si el host es diferente
$dbname = "railway";
$user = "root"; // O el usuario que hayas configurado en Railway
$pass = "tmQCZVBbxdsdhlWurEdNCPWugNDZJoer"; // Tu contraseña real


// Conectar a la base de datos
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se recibieron datos desde la ESP8266
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["N"]) && isset($_POST["rfid"])) {
        $N = intval($_POST["N"]); // Convertir a entero
        $rfid = $conn->real_escape_string($_POST["rfid"]); // Prevenir SQL Injection

        // Insertar en la base de datos
        $sql = "INSERT INTO registros (N, rfid, fecha) VALUES ('$N', '$rfid', NOW())";

        if ($conn->query($sql) === TRUE) {
            echo "Datos guardados correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Faltan datos (N y rfid)";
    }
} else {
    echo "Método de solicitud inválido";
}

// Cerrar la conexión
$conn->close();
?>

