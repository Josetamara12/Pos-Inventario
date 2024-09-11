<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas - Sistema Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Ventas</h2>

        <!-- Formulario para Nueva Venta -->
        <div class="mb-4">
            <h4>Registrar Nueva Venta</h4>
            <form>
                <div class="row g-3">
                    <div class="col-md-4">
                        <label for="saleId" class="form-label">ID de Venta</label>
                        <input type="text" class="form-control" id="saleId">
                    </div>
                    <div class="col-md-4">
                        <label for="saleDate" class="form-label">Fecha de Venta</label>
                        <input type="date" class="form-control" id="saleDate">
                    </div>
                    <div class="col-md-4">
                        <label for="customer" class="form-label">Cliente</label>
                        <input type="text" class="form-control" id="customer">
                    </div>
                    <div class="col-md-4">
                        <label for="totalAmount" class="form-label">Total</label>
                        <input type="number" class="form-control" id="totalAmount" step="0.01">
                    </div>
                    <div class="col-md-4">
                        <label for="saleStatus" class="form-label">Estado</label>
                        <select id="saleStatus" class="form-select">
                            <option selected>Seleccionar...</option>
                            <option value="1">Pendiente</option>
                            <option value="2">Completada</option>
                            <option value="3">Cancelada</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Registrar Venta</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Tabla de Ventas -->
        <div class="mb-4">
            <h4>Lista de Ventas</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID de Venta</th>
                        <th>Fecha de Venta</th>
                        <th>Cliente</th>
                        <th>Total</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2001</td>
                        <td>2024-08-01</td>
                        <td>Cliente A</td>
                        <td>$1,500.00</td>
                        <td><span class="badge bg-success">Completada</span></td>
                        <td>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewSaleModal">Ver</button>
                            <button class="btn btn-danger btn-sm">Cancelar</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2002</td>
                        <td>2024-08-10</td>
                        <td>Cliente B</td>
                        <td>$750.00</td>
                        <td><span class="badge bg-warning">Pendiente</span></td>
                        <td>
                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewSaleModal">Ver</button>
                            <button class="btn btn-success btn-sm">Completar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal para Ver Detalles de la Venta -->
        <div class="modal fade" id="viewSaleModal" tabindex="-1" aria-labelledby="viewSaleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewSaleModalLabel">Detalles de la Venta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h5>ID de Venta: 2001</h5>
                        <p><strong>Fecha de Venta:</strong> 2024-08-01</p>
                        <p><strong>Cliente:</strong> Cliente A</p>
                        <p><strong>Total:</strong> $1,500.00</p>
                        <p><strong>Estado:</strong> Completada</p>
                        <h6>Artículos Vendidos</h6>
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
                                    <td>Artículo X</td>
                                    <td>5</td>
                                    <td>$300.00</td>
                                    <td>$1,500.00</td>
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
