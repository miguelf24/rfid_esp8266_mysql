<?php

$servername = $_ENV["MYSQLHOST"];
$username   = $_ENV["MYSQLUSER"];
$password   = $_ENV["MYSQLPASSWORD"];
$dbname     = $_ENV["MYSQL_DATABASE"];

echo "Servidor: $servername<br>";
echo "Usuario: $username<br>";
echo "Contraseña: $password<br>";
echo "Base de datos: $dbname<br>";

?>

