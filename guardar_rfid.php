<?php

$servername = $env["MYSQLHOST"];
$username   = $env["MYSQLUSER"];
$password   = $env["MYSQLPASSWORD"];
$dbname     = $env["MYSQL_DATABASE"];

echo "Servidor: $servername<br>";
echo "Usuario: $username<br>";
echo "Contraseña: $password<br>";
echo "Base de datos: $dbname<br>";

?>

