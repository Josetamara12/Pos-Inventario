<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores - Sistema Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Proveedores</h2>

        <!-- Formulario para Nuevo Proveedor -->
        <div class="mb-4">
            <h4>Agregar Nuevo Proveedor</h4>
            <form>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="providerName" class="form-label">Nombre del Proveedor</label>
                        <input type="text" class="form-control" id="providerName">
                    </div>
                    <div class="col-md-4">
                        <label for="providerEmail" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="providerEmail">
                    </div>
                    <div class="col-md-4">
                        <label for="providerPhone" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="providerPhone">
                    </div>
                    <div class="col-md-6">
                        <label for="providerAddress" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="providerAddress">
                    </div>
                    <div class="col-md-6">
                        <label for="providerCity" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="providerCity">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Agregar Proveedor</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Tabla de Proveedores -->
        <div class="mb-4">
            <h4>Lista de Proveedores</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo Electrónico</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1001</td>
                        <td>Proveedor A</td>
                        <td>contacto@proveedora.com</td>
                        <td>(123) 456-7890</td>
                        <td>Calle Falsa 123</td>
                        <td>Ciudad A</td>
                        <td>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewProviderModal">Ver</button>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>Proveedor B</td>
                        <td>info@proveedorb.com</td>
                        <td>(987) 654-3210</td>
                        <td>Avenida Siempre Viva 742</td>
                        <td>Ciudad B</td>
                        <td>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewProviderModal">Ver</button>
                            <button class="btn btn-warning btn-sm">Editar</button>
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal para Ver Detalles del Proveedor -->
        <div class="modal fade" id="viewProviderModal" tabindex="-1" aria-labelledby="viewProviderModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewProviderModalLabel">Detalles del Proveedor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>ID del Proveedor: 1001</h5>
                        <p><strong>Nombre:</strong> Proveedor A</p>
                        <p><strong>Correo Electrónico:</strong> contacto@proveedora.com</p>
                        <p><strong>Teléfono:</strong> (123) 456-7890</p>
                        <p><strong>Dirección:</strong> Calle Falsa 123</p>
                        <p><strong>Ciudad:</strong> Ciudad A</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
