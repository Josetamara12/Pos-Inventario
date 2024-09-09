<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'inventario';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
