<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios - Sistema Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Usuarios</h2>

        <!-- Formulario para Nuevo Usuario -->
        <div class="card mb-4">
            <div class="card-header">
                <h4>Agregar Nuevo Usuario</h4>
            </div>
            <div class="card-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="userName" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="userName" placeholder="Ej. Juan Pérez">
                        </div>
                        <div class="col-md-6">
                            <label for="userEmail" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="userEmail" placeholder="Ej. juan@example.com">
                        </div>
                        <div class="col-md-6">
                            <label for="userRole" class="form-label">Rol</label>
                            <select id="userRole" class="form-select">
                                <option selected>Selecciona...</option>
                                <option value="admin">Administrador</option>
                                <option value="manager">Gerente</option>
                                <option value="employee">Empleado</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="userStatus" class="form-label">Estado</label>
                            <select id="userStatus" class="form-select">
                                <option selected>Selecciona...</option>
                                <option value="active">Activo</option>
                                <option value="inactive">Inactivo</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Agregar Usuario</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabla de Usuarios -->
        <div class="card">
            <div class="card-header">
                <h4>Lista de Usuarios</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Correo Electrónico</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Juan Pérez</td>
                                <td>juan@example.com</td>
                                <td>Administrador</td>
                                <td>Activo</td>
                                <td>
                                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewUserModal" data-id="1" data-name="Juan Pérez" data-email="juan@example.com" data-role="Administrador" data-status="Activo">Ver</button>
                                    <button class="btn btn-warning btn-sm">Editar</button>
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ana Gómez</td>
                                <td>ana@example.com</td>
                                <td>Gerente</td>
                                <td>Inactivo</td>
                                <td>
                                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewUserModal" data-id="2" data-name="Ana Gómez" data-email="ana@example.com" data-role="Gerente" data-status="Inactivo">Ver</button>
                                    <button class="btn btn-warning btn-sm">Editar</button>
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal para Ver Detalles del Usuario -->
        <div class="modal fade" id="viewUserModal" tabindex="-1" aria-labelledby="viewUserModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewUserModalLabel">Detalles del Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>ID del Usuario: <span id="modalUserId"></span></h5>
                        <p><strong>Nombre:</strong> <span id="modalUserName"></span></p>
                        <p><strong>Correo Electrónico:</strong> <span id="modalUserEmail"></span></p>
                        <p><strong>Rol:</strong> <span id="modalUserRole"></span></p>
                        <p><strong>Estado:</strong> <span id="modalUserStatus"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script para actualizar el contenido del modal
        document.addEventListener('DOMContentLoaded', function () {
            var viewUserModal = document.getElementById('viewUserModal');
            viewUserModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget; // Botón que activó el modal
                var id = button.getAttribute('data-id');
                var name = button.getAttribute('data-name');
                var email = button.getAttribute('data-email');
                var role = button.getAttribute('data-role');
                var status = button.getAttribute('data-status');
                
                var modalUserId = viewUserModal.querySelector('#modalUserId');
                var modalUserName = viewUserModal.querySelector('#modalUserName');
                var modalUserEmail = viewUserModal.querySelector('#modalUserEmail');
                var modalUserRole = viewUserModal.querySelector('#modalUserRole');
                var modalUserStatus = viewUserModal.querySelector('#modalUserStatus');
                
                modalUserId.textContent = id;
                modalUserName.textContent = name;
                modalUserEmail.textContent = email;
                modalUserRole.textContent = role;
                modalUserStatus.textContent = status;
            });
        });
    </script>
</body>

</html>
