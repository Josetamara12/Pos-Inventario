<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Determine which page to include
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$validPages = ['compras', 'ordenes_recibidas', 'devoluciones', 'stocks', 'ventas', 'proveedores', 'productos', 'usuarios', 'configuracion'];
if (!in_array($page, $validPages)) {
    $page = 'home'; // Default page
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/estilos.css"> <!-- Enlace al CSS personalizado -->
</head>

<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-dark sidebar">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <i class="fas fa-box fa-lg me-2"></i>
                <span class="fs-4">Sistema Inventarios</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="?page=compras" class="nav-link text-white">
                        <i class="fas fa-shopping-cart me-2"></i>Compras
                    </a>
                </li>
                <li>
                    <a href="?page=ordenes_recibidas" class="nav-link text-white">
                        <i class="fas fa-inbox me-2"></i>Órdenes Recibidas
                    </a>
                </li>
                <li>
                    <a href="?page=devoluciones" class="nav-link text-white">
                        <i class="fas fa-undo me-2"></i>Devoluciones
                    </a>
                </li>
                <li>
                    <a href="?page=stocks" class="nav-link text-white">
                        <i class="fas fa-boxes me-2"></i>Stocks
                    </a>
                </li>
                <li>
                    <a href="?page=ventas" class="nav-link text-white">
                        <i class="fas fa-cash-register me-2"></i>Ventas
                    </a>
                </li>
                <li>
                    <a href="?page=proveedores" class="nav-link text-white">
                        <i class="fas fa-truck me-2"></i>Proveedores
                    </a>
                </li>
                <li>
                    <a href="?page=productos" class="nav-link text-white">
                        <i class="fas fa-tags me-2"></i>Productos
                    </a>
                </li>
                <li>
                    <a href="?page=usuarios" class="nav-link text-white">
                        <i class="fas fa-users me-2"></i>Usuarios
                    </a>
                </li>
                <li>
                    <a href="?page=configuracion" class="nav-link text-white">
                        <i class="fas fa-cog me-2"></i>Configuración
                    </a>
                </li>
            </ul>
            <hr>
        </div>

        <!-- Main Content -->
        <div class="content flex-grow-1 p-4">
            <!-- Header -->
            <header class="bg-primary text-white text-center py-3 mb-4">
                <h1>Menu de Incio</h1>
            </header>

            <div class="container">
                <?php
                // Incluye los contenidos de las paginas.
                if ($page === 'home') {
                    echo '<div class="alert alert-info" role="alert">
                            Estás dentro del sistema de inventarios. Utiliza el menú de navegación para acceder a las diferentes secciones.
                        </div>';
                } else {
                    include "modules/{$page}.php";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    
</body>

</html>
