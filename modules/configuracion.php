<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin') {
    echo "Acceso denegado";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Configuración</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h2>Configuración</h2>
    <a href="../index.php">Volver al Dashboard</a>
    <!-- Aquí añadirás la lógica para gestionar la configuración general del sistema -->
</body>
</html>
