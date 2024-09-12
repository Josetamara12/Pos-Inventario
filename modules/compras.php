<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras - Sistema Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Registro de Compras</h2>

        <form>
            <div class="row mb-3">
                <label for="purchaseId" class="col-sm-2 col-form-label">ID de Compra</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="purchaseId" placeholder="Ingrese ID de Compra" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="supplier" class="col-sm-2 col-form-label">Proveedor</label>
                <div class="col-sm-10">
                    <select id="supplier" class="form-select" required>
                        <option selected disabled value="">Seleccione un Proveedor</option>
                        <option value="1">Proveedor 1</option>
                        <option value="2">Proveedor 2</option>
                        <option value="3">Proveedor 3</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="purchaseDate" class="col-sm-2 col-form-label">Fecha de Compra</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="purchaseDate" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="items" class="col-sm-2 col-form-label">Artículos</label>
                <div class="col-sm-10">
                    <div id="itemsContainer">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" placeholder="Nombre del Artículo" aria-label="Nombre del Artículo">
                            <input type="number" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
                            <input type="number" class="form-control" placeholder="Precio Unitario" aria-label="Precio Unitario">
                            <button class="btn btn-outline-secondary" type="button" onclick="removeItem(this)">Eliminar</button>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="button" onclick="addItem()">Agregar Artículo</button>
                </div>
            </div>

            <div class="row mb-3">
                <label for="totalAmount" class="col-sm-2 col-form-label">Monto Total</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="totalAmount" placeholder="Ingrese Monto Total" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Registrar Compra</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
