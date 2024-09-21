<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoluciones - Sistema Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4 text-center">Registro de Devoluciones</h2>

        <form>
            <!-- ID de Devolución -->
            <div class="mb-3">
                <label for="returnId" class="form-label">ID de Devolución</label>
                <input type="text" class="form-control" id="returnId" placeholder="Ingrese ID de Devolución" required>
            </div>

            <!-- ID de Orden -->
            <div class="mb-3">
                <label for="orderId" class="form-label">ID de Orden</label>
                <input type="text" class="form-control" id="orderId" placeholder="Ingrese ID de Orden" required>
            </div>

            <!-- Fecha de Devolución -->
            <div class="mb-3">
                <label for="returnDate" class="form-label">Fecha de Devolución</label>
                <input type="date" class="form-control" id="returnDate" required>
            </div>

            <!-- Artículos -->
            <div class="mb-3">
                <label class="form-label">Artículos</label>
                <div id="itemsContainer" class="mb-2">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" placeholder="Nombre del Artículo" aria-label="Nombre del Artículo">
                        <input type="number" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
                        <input type="text" class="form-control" placeholder="Motivo de Devolución" aria-label="Motivo de Devolución">
                        <button class="btn btn-outline-secondary" type="button" onclick="removeItem(this)">Eliminar</button>
                    </div>
                </div>
                <button class="btn btn-primary" type="button" onclick="addItem()">Agregar Artículo</button>
            </div>

            <!-- Monto Total -->
            <div class="mb-3">
                <label for="totalAmount" class="form-label">Monto Total</label>
                <input type="number" class="form-control" id="totalAmount" placeholder="Ingrese Monto Total" required>
            </div>

            <!-- Botón de Envío -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Registrar Devolución</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>

</html>
