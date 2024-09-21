<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Compras - Sistema de Inventarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<<<<<<< HEAD
    <link rel="stylesheet" href="estilos.css">

</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Registro de Compras</h2>

        <form>
            <div class="mb-3">
                <label for="purchaseId" class="form-label">ID de Compra</label>
                <input type="text" class="form-control" id="purchaseId" placeholder="Ingrese ID de Compra" required>
            </div>

            <div class="mb-3">
                <label for="supplier" class="form-label">Proveedor</label>
                <select id="supplier" class="form-select" required>
                    <option selected disabled value="">Seleccione un Proveedor</option>
                    <option value="1">Proveedor 1</option>
                    <option value="2">Proveedor 2</option>
                    <option value="3">Proveedor 3</option>
                </select>
=======
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
>>>>>>> 4f904dd39a07f5fff8372923ce40ccfdb613c314
            </div>

            <div class="mb-3">
                <label for="purchaseDate" class="form-label">Fecha de Compra</label>
<<<<<<< HEAD
                <input type="date" class="form-control" id="purchaseDate" required>
=======
                <input type="date" class="form-control" id="purchaseDate" name="date_shop" required>
>>>>>>> 4f904dd39a07f5fff8372923ce40ccfdb613c314
            </div>

            <div class="mb-3">
                <label for="items" class="form-label">Artículos</label>
                <div id="itemsContainer">
                    <div class="input-group mb-2">
<<<<<<< HEAD
                        <input type="text" class="form-control" placeholder="Nombre del Artículo" aria-label="Nombre del Artículo">
                        <input type="number" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
                        <input type="number" class="form-control" placeholder="Precio Unitario" aria-label="Precio Unitario">
                        <button class="btn btn-outline-secondary" type="button" onclick="removeItem(this)">Eliminar</button>
                    </div>
                </div>
                <button class="btn btn-primary" type="button" onclick="addItem()">Agregar Artículo</button>
            </div>

            <div class="mb-3">
                <label for="totalAmount" class="form-label">Monto Total</label>
                <input type="number" class="form-control" id="totalAmount" placeholder="Ingrese Monto Total" required>
=======
                        <input type="text" class="form-control" placeholder="Nombre del Artículo" name="name_article" aria-label="Nombre del Artículo" required>
                        <input type="number" class="form-control" placeholder="Cantidad" name="ammount" aria-label="Cantidad" required>
                        <input type="number" class="form-control" placeholder="Precio Unitario" name="ammount_unit" aria-label="Precio Unitario" required>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <input type="number" class="form-control" id="totalAmount" name="ammount_total" placeholder="Ingrese Monto Total" required>
>>>>>>> 4f904dd39a07f5fff8372923ce40ccfdb613c314
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Registrar Compra</button>
            </div>
        </form>
    </div>

</body>

<<<<<<< HEAD
</html>
 
=======
</html>
>>>>>>> 4f904dd39a07f5fff8372923ce40ccfdb613c314
