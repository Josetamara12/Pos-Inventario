<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link al CSS personalizado -->
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Fila que centra el contenido vertical y horizontalmente -->
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <!-- Tarjeta de Bootstrap para el formulario de registro -->
                <div class="card shadow-lg">
                    <div class="card-body">
                        <!-- Título del formulario -->
                        <h2 class="text-center mb-4">Registrarte</h2>
                        <h5 class="text-left mb-4">Es rápido y fácil.</h5>
                        
                        <!-- Mostrar mensajes de error o éxito -->
                        <?php if (isset($_GET['registro']) && $_GET['registro'] == 'exitoso'): ?>
                            <div class="alert alert-success">
                                Registro exitoso. Ahora puedes <a href="login.php">iniciar sesión</a>.
                            </div>
                        <?php endif; ?>
                        
                        <!-- Formulario que envía los datos a auth.php mediante el método POST -->
                        <form id="registerForm" action="auth.php" method="POST">
                            <!-- Campo de entrada para el nombre -->
                            <div class="mb-3">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" required>
                            </div>
                            <!-- Campo de entrada para el apellido -->
                            <div class="mb-3">
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" required>
                            </div>
                            <!-- Campo de entrada para el número de móvil o correo electrónico -->
                            <div class="mb-3">
                                <input type="text" class="form-control" id="contacto" name="contacto" placeholder="Número de móvil" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" required>
                            </div>
                            <!-- Campo de entrada para la nueva contraseña -->
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Nueva Contraseña" required>
                            </div>
                            <!-- Campo de entrada para la fecha de nacimiento -->
                            <div class="mb-3">
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                            </div>
                            <!-- Campo de selección para el género -->
                            <div class="mb-3">
                                <select class="form-control" id="genero" name="genero" required>
                                    <option value="">Selecciona tu género</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                    <option value="otro">Otro</option>
                                </select>
                            </div>
                            <!-- Campo oculto para CSRF Token (si decides implementarlo) -->
                            <!-- <input type="hidden" name="csrf_token" value="<?php echo $csrfToken; ?>"> -->
                            <!-- Botón para enviar el formulario -->
                            <button type="submit" class="btn btn-primary w-100" name="register">Registrarte</button>
                        </form>
                        <!-- Enlace para iniciar sesión -->
                        <div class="text-center mt-3">
                            <a href="login.php">¿Ya tienes una cuenta? Inicia sesión</a>
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
