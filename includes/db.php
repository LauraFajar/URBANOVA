<?php
// Configuración de la Base de Datos
// Intenta obtener variables de entorno (para Railway/Producción)
$db_host = getenv('MYSQLHOST') ?: 'localhost';
$db_user = getenv('MYSQLUSER') ?: 'root';
$db_pass = getenv('MYSQLPASSWORD') ?: '';
$db_name = getenv('MYSQLDATABASE') ?: 'urbanova_db';
$db_port = getenv('MYSQLPORT') ?: 3306;

// Conexión
mysqli_report(MYSQLI_REPORT_OFF); 
$conn = @new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);

// Verificar conexión
if ($conn->connect_error) {
    // Si falla la conexión, no mostramos el error fatal al usuario, pero lo registramos
    error_log("Connection failed: " . $conn->connect_error);
    $db_connected = false;
} else {
    $db_connected = true;
    $conn->set_charset("utf8mb4");
}
?>
