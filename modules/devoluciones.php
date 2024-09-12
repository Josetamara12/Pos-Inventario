<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devoluciones - Sistema Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-4">Registro de Devoluciones</h2>

        <form>
            <div class="row mb-3">
                <label for="returnId" class="col-sm-2 col-form-label">ID de Devolución</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="returnId" placeholder="Ingrese ID de Devolución" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="orderId" class="col-sm-2 col-form-label">ID de Orden</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="orderId" placeholder="Ingrese ID de Orden" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="returnDate" class="col-sm-2 col-form-label">Fecha de Devolución</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="returnDate" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="items" class="col-sm-2 col-form-label">Artículos</label>
                <div class="col-sm-10">
                    <div id="itemsContainer">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" placeholder="Nombre del Artículo" aria-label="Nombre del Artículo">
                            <input type="number" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
                            <input type="text" class="form-control" placeholder="Motivo de Devolución" aria-label="Motivo de Devolución">
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
                    <button type="submit" class="btn btn-primary">Registrar Devolución</button>
                </div>
            </div>
        </form>
    </div>

    
</body>

</html>
