<?php
// Establecer la conexión a la base de datos
$conn = new mysqli($db_host, $db_usuario, $db_password, $db_nombre);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>