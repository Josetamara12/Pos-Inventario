<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Órdenes Recibidas - Sistema Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Órdenes Recibidas</h2>

        <!-- Filtros de Búsqueda -->
        <div class="mb-4">
            <h4>Filtrar Órdenes</h4>
            <form class="row g-3">
                <div class="col-md-4">
                    <label for="orderId" class="form-label">ID de Orden</label>
                    <input type="text" class="form-control" id="orderId" placeholder="Ingrese ID de Orden">
                </div>
                <div class="col-md-4">
                    <label for="orderDate" class="form-label">Fecha de Orden</label>
                    <input type="date" class="form-control" id="orderDate">
                </div>
                <div class="col-md-4">
                    <label for="orderStatus" class="form-label">Estado</label>
                    <select id="orderStatus" class="form-select">
                        <option value="" selected>Seleccionar...</option>
                        <option value="1">Pendiente</option>
                        <option value="2">Procesada</option>
                        <option value="3">Enviada</option>
                    </select>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </div>
            </form>
        </div>

        <!-- Tabla de Órdenes Recibidas -->
        <div class="mb-4">
            <h4>Lista de Órdenes</h4>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID de Orden</th>
                        <th>Proveedor</th>
                        <th>Fecha de Orden</th>
                        <th>Estado</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1001</td>
                        <td>Proveedor X</td>
                        <td>2024-08-01</td>
                        <td><span class="badge bg-warning">Pendiente</span></td>
                        <td>$1,200.00</td>
                        <td>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewOrderModal" data-order-id="1001" data-order-provider="Proveedor X" data-order-date="2024-08-01" data-order-status="Pendiente" data-order-total="$1,200.00">Ver</button>
                            <button class="btn btn-success btn-sm">Marcar como Procesada</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>Proveedor Y</td>
                        <td>2024-08-05</td>
                        <td><span class="badge bg-success">Enviada</span></td>
                        <td>$850.00</td>
                        <td>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewOrderModal" data-order-id="1002" data-order-provider="Proveedor Y" data-order-date="2024-08-05" data-order-status="Enviada" data-order-total="$850.00">Ver</button>
                            <button class="btn btn-secondary btn-sm">Detalles</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal para Ver Detalles de la Orden -->
        <div class="modal fade" id="viewOrderModal" tabindex="-1" aria-labelledby="viewOrderModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewOrderModalLabel">Detalles de la Orden</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>ID de Orden: <span id="modalOrderId">1001</span></h5>
                        <p><strong>Proveedor:</strong> <span id="modalOrderProvider">Proveedor X</span></p>
                        <p><strong>Fecha de Orden:</strong> <span id="modalOrderDate">2024-08-01</span></p>
                        <p><strong>Estado:</strong> <span id="modalOrderStatus">Pendiente</span></p>
                        <p><strong>Total:</strong> <span id="modalOrderTotal">$1,200.00</span></p>
                        <h6>Artículos en la Orden</h6>
                        <table class="table table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th>Artículo</th>
                                    <th>Cantidad</th>
                                    <th>Precio Unitario</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Artículo A</td>
                                    <td>10</td>
                                    <td>$100.00</td>
                                    <td>$1,000.00</td>
                                </tr>
                                <tr>
                                    <td>Artículo B</td>
                                    <td>2</td>
                                    <td>$100.00</td>
                                    <td>$200.00</td>
                                </tr>
                            </tbody>
                        </table>
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
