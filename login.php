<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link al CSS personalizado -->
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Fila que centra el contenido vertical y horizontalmente -->
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-4">
                <!-- Tarjeta de Bootstrap para el formulario de inicio de sesión -->
                <div class="card shadow-lg">
                    <div class="card-body">
                        <!-- Título del formulario -->
                        <h3 class="text-center mb-4">Iniciar Sesión</h3>
                        
                        <!-- Mostrar mensajes de error o éxito -->
                        <?php if (isset($_GET['error'])): ?>
                            <div class="alert alert-danger">
                                <?php
                                if ($_GET['error'] == 'login') {
                                    echo "Nombre de usuario o contraseña incorrectos.";
                                } elseif ($_GET['error'] == 'registro') {
                                    echo "Registro exitoso. Ahora puedes iniciar sesión.";
                                }
                                ?>
                            </div>
                        <?php endif; ?>
                        
                        <!-- Formulario que envía los datos a auth.php mediante el método POST -->
                        <form action="auth.php" method="POST">
                            <!-- Campo de entrada para el incio de sesion con correo-->
                            <div class="mb-3">
                                <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo" required>
                            </div>
                            <!-- Campo de entrada para la contraseña -->
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required>
                            </div>
                            <!-- Botón para enviar el formulario -->
                            <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                        </form>
                        <!-- Enlace para registrarse -->
                        <div class="text-center mt-3">
                            <a href="register.php">¿No tienes una cuenta? Regístrate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>