<?php

// $servername = getenv("MYSQLHOST") ?: "mysql.railway.internal";
// $username   = getenv("MYSQLUSER") ?: "root";
//  $password   = getenv("MYSQLPASSWORD") ?: "tu_contraseña_aquí";
// $dbname     = getenv("MYSQL_DATABASE") ?: "railway";



// Intentar obtener variables con getenv()
$servername = $_ENV["MYSQLHOST"] ?? "ERROR";
$username   = $_ENV["MYSQLUSER"] ?? "ERROR";
$password   = $_ENV["MYSQLPASSWORD"] ?? "ERROR";
$dbname     = $_ENV["MYSQL_DATABASE"] ?? "ERROR";

echo "Servidor: $servername<br>";
echo "Usuario: $username<br>";
echo "Contraseña: $password<br>";
echo "Base de datos: $dbname<br>";


?>
