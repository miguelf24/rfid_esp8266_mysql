<?php

$servername = getenv("MYSQLHOST") ?: "mysql.railway.internal";
$username   = getenv("MYSQLUSER") ?: "root";
$password   = getenv("MYSQLPASSWORD") ?: "tu_contraseña_aquí";
$dbname     = getenv("MYSQL_DATABASE") ?: "railway";
$port       = getenv("DB_PORT") ?: "3306";


// Intentar obtener variables con getenv()

?>
