<?php
echo "<h2>🔍 Listando TODAS las Variables de Entorno</h2>";
foreach (getenv() as $key => $value) {
    echo "$key = $value <br>";
}

echo "<br><h2>🔍 Listando TODAS las Variables del Servidor</h2>";
foreach ($_SERVER as $key => $value) {
    echo "$key = $value <br>";
}
?>
