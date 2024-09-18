<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Compras - Sistema de Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-1">
        <h2 class="mb-4 text-center">Registro de Compras</h2>

        <form id="purchaseForm">
            <div class="mb-3">
                <input type="number" class="form-control" id="id_proveedor" name="id_proveedor" placeholder="Ingresa ID Proveedor" required>
            </div>

            <div class="mb-3">
                <input type="number" class="form-control" id="id_usuario" name="id_user" placeholder="Ingresa ID Usuario" required>
            </div>

            <div class="mb-3">
                <input type="number" class="form-control" id="id_cliente" name="id_client" placeholder="Ingresa ID Cliente" required>
            </div>

            <div class="mb-3">
                <input type="number" class="form-control" id="id_producto" name="id_product" placeholder="Ingresa ID Producto" required>
            </div>

            <div class="mb-3">
                <label for="purchaseDate" class="form-label">Fecha de Compra</label>
                <input type="date" class="form-control" id="purchaseDate" name="date_shop" required>
            </div>

            <div class="mb-3">
                <label for="items" class="form-label">Artículos</label>
                <div id="itemsContainer">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" placeholder="Nombre del Artículo" name="name_article" aria-label="Nombre del Artículo" required>
                        <input type="number" class="form-control" placeholder="Cantidad" name="ammount" aria-label="Cantidad" required>
                        <input type="number" class="form-control" placeholder="Precio Unitario" name="ammount_unit" aria-label="Precio Unitario" required>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <input type="number" class="form-control" id="totalAmount" name="ammount_total" placeholder="Ingrese Monto Total" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Registrar Compra</button>
            </div>
        </form>
    </div>

</body>

</html>