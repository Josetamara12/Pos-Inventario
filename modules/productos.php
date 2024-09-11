<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - Sistema Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Productos</h2>

        <!-- Formulario para Nuevo Producto -->
        <div class="mb-4">
            <h4>Agregar Nuevo Producto</h4>
            <form>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="productName" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="productName" placeholder="Ej. Camiseta">
                    </div>
                    <div class="col-md-4">
                        <label for="productCategory" class="form-label">Categoría</label>
                        <select id="productCategory" class="form-select">
                            <option selected>Selecciona...</option>
                            <option value="1">Ropa</option>
                            <option value="2">Electrónica</option>
                            <option value="3">Hogar</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="productPrice" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="productPrice" placeholder="Ej. 20.00">
                    </div>
                    <div class="col-md-4">
                        <label for="productStock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="productStock" placeholder="Ej. 100">
                    </div>
                    <div class="col-md-4">
                        <label for="productSupplier" class="form-label">Proveedor</label>
                        <select id="productSupplier" class="form-select">
                            <option selected>Selecciona...</option>
                            <option value="1">Proveedor A</option>
                            <option value="2">Proveedor B</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Agregar Producto</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Tabla de Productos -->
        <div class="mb-4">
            <h4>Lista de Productos</h4>
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Categoría</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Proveedor</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2001</td>
                            <td>Camiseta</td>
                            <td>Ropa</td>
                            <td>$20.00</td>
                            <td>50</td>
                            <td>Proveedor A</td>
                            <td>
                                <button class="btn btn-info btn-sm">Ver</button>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2002</td>
                            <td>Smartphone</td>
                            <td>Electrónica</td>
                            <td>$300.00</td>
                            <td>30</td>
                            <td>Proveedor B</td>
                            <td>
                                <button class="btn btn-info btn-sm">Ver</button>
                                <button class="btn btn-warning btn-sm">Editar</button>
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal para Ver Detalles del Producto -->
        <div class="modal fade" id="viewProductModal" tabindex="-1" aria-labelledby="viewProductModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewProductModalLabel">Detalles del Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>ID del Producto: 2001</h5>
                        <p><strong>Nombre:</strong> Camiseta</p>
                        <p><strong>Categoría:</strong> Ropa</p>
                        <p><strong>Precio:</strong> $20.00</p>
                        <p><strong>Stock:</strong> 50</p>
                        <p><strong>Proveedor:</strong> Proveedor A</p>
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
