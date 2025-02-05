<?php
echo "<h2>🔍 Verificando Variables de Entorno</h2>";

// Intentar obtener variables con getenv()
echo "<b>🔹 Usando getenv():</b><br>";
echo "DB_SERVER: " . (getenv("DB_SERVER") ?: "❌ NO DEFINIDO") . "<br>";
echo "DB_USER: " . (getenv("DB_USER") ?: "❌ NO DEFINIDO") . "<br>";
echo "DB_PASSWORD: " . (getenv("DB_PASSWORD") ?: "❌ NO DEFINIDO") . "<br>";
echo "DB_NAME: " . (getenv("DB_NAME") ?: "❌ NO DEFINIDO") . "<br>";
echo "DB_PORT: " . (getenv("DB_PORT") ?: "❌ NO DEFINIDO") . "<br><br>";

// Intentar obtener variables desde $_ENV
echo "<b>🔹 Usando \$_ENV:</b><br>";
echo "DB_SERVER: " . ($_ENV["DB_SERVER"] ?? "❌ NO DEFINIDO") . "<br>";
echo "DB_USER: " . ($_ENV["DB_USER"] ?? "❌ NO DEFINIDO") . "<br>";
echo "DB_PASSWORD: " . ($_ENV["DB_PASSWORD"] ?? "❌ NO DEFINIDO") . "<br>";
echo "DB_NAME: " . ($_ENV["DB_NAME"] ?? "❌ NO DEFINIDO") . "<br>";
echo "DB_PORT: " . ($_ENV["DB_PORT"] ?? "❌ NO DEFINIDO") . "<br><br>";

// Intentar obtener variables desde $_SERVER
echo "<b>🔹 Usando \$_SERVER:</b><br>";
echo "DB_SERVER: " . ($_SERVER["DB_SERVER"] ?? "❌ NO DEFINIDO") . "<br>";
echo "DB_USER: " . ($_SERVER["DB_USER"] ?? "❌ NO DEFINIDO") . "<br>";
echo "DB_PASSWORD: " . ($_SERVER["DB_PASSWORD"] ?? "❌ NO DEFINIDO") . "<br>";
echo "DB_NAME: " . ($_SERVER["DB_NAME"] ?? "❌ NO DEFINIDO") . "<br>";
echo "DB_PORT: " . ($_SERVER["DB_PORT"] ?? "❌ NO DEFINIDO") . "<br>";
?>
