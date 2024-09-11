<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración - Sistema Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Configuración</h2>

        <!-- Pestañas de Configuración -->
        <ul class="nav nav-tabs mb-4" id="configTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true">Perfil</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="preferences-tab" data-bs-toggle="tab" href="#preferences" role="tab" aria-controls="preferences" aria-selected="false">Preferencias</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="security-tab" data-bs-toggle="tab" href="#security" role="tab" aria-controls="security" aria-selected="false">Seguridad</a>
            </li>
        </ul>

        <div class="tab-content" id="configTabsContent">
            <!-- Perfil -->
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card">
                    <div class="card-header">
                        <h4>Actualizar Perfil</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="username" class="form-label">Nombre de Usuario</label>
                                    <input type="text" class="form-control" id="username" placeholder="Ej. juanperez">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" id="email" placeholder="Ej. juan@example.com">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Preferencias -->
            <div class="tab-pane fade" id="preferences" role="tabpanel" aria-labelledby="preferences-tab">
                <div class="card">
                    <div class="card-header">
                        <h4>Preferencias del Sistema</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="theme" class="form-label">Tema</label>
                                    <select id="theme" class="form-select">
                                        <option selected>Selecciona...</option>
                                        <option value="light">Claro</option>
                                        <option value="dark">Oscuro</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="language" class="form-label">Idioma</label>
                                    <select id="language" class="form-select">
                                        <option selected>Selecciona...</option>
                                        <option value="en">Inglés</option>
                                        <option value="es">Español</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Seguridad -->
            <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                <div class="card">
                    <div class="card-header">
                        <h4>Configuración de Seguridad</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="currentPassword" class="form-label">Contraseña Actual</label>
                                    <input type="password" class="form-control" id="currentPassword" placeholder="********">
                                </div>
                                <div class="col-md-6">
                                    <label for="newPassword" class="form-label">Nueva Contraseña</label>
                                    <input type="password" class="form-control" id="newPassword" placeholder="********">
                                </div>
                                <div class="col-md-6">
                                    <label for="confirmPassword" class="form-label">Confirmar Nueva Contraseña</label>
                                    <input type="password" class="form-control" id="confirmPassword" placeholder="********">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
