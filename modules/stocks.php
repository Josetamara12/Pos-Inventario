<?php
session_start();
if (!isset($_SESSION['user_id']) || ($_SESSION['role'] != 'admin' && $_SESSION['role'] != 'user')) {
    echo "Acceso denegado";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Gestión de Stocks</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h2>Gestión de Stocks</h2>
    <a href="../index.php">Volver al Dashboard</a>
    <!-- Aquí añadirás la lógica para gestionar los stocks -->
</body>
</html>
