<?php

 $servername = getenv("MYSQLHOST") ?: "mysql.railway.internal";
 $username   = getenv("MYSQLUSER") ?: "root";
  $password   = getenv("MYSQLPASSWORD") ?: "tu_contraseña_aquí";
 $dbname     = getenv("MYSQL_DATABASE") ?: "railway";


echo "Servidor: $servername<br>";
echo "Usuario: $username<br>";
echo "Contraseña: $password<br>";
echo "Base de datos: $dbname<br>";


?>
