<?php

 $servername = getenv("MYSQLHOST") ?;
 $username   = getenv("MYSQLUSER") ?;
  $password   = getenv("MYSQLPASSWORD");
 $dbname     = getenv("MYSQL_DATABASE");


echo "Servidor: $servername<br>";
echo "Usuario: $username<br>";
echo "Contraseña: $password<br>";
echo "Base de datos: $dbname<br>";


?>
