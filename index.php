<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="container-fluid">
        <!-- Header -->
        <header class="bg-primary text-white text-center py-3">
            <h1>Bienvenido al Sistema de Inventarios</h1>
        </header>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Sistema de Inventarios</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="modules/compras.php">Compras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modules/ordenes_recibidas.php">Órdenes Recibidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modules/devoluciones.php">Devoluciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modules/stocks.php">Stocks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modules/ventas.php">Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modules/proveedores.php">Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modules/productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modules/usuarios.php">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modules/configuracion.php">Configuración</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger text-white" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info" role="alert">
                        Estás dentro del sistema de inventarios. Utiliza el menú de navegación para acceder a las diferentes secciones.
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-light text-center py-3 mt-4">
            <p class="mb-0">&copy; <?php echo date("Y"); ?> Sistema de Inventarios. Todos los derechos reservados.</p>
        </footer>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
