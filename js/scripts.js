// scripts.js
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Previene el envío normal del formulario
        // Aquí podrías hacer la solicitud al servidor con AJAX si lo deseas
        // Redirige al usuario a la página de inicio de sesión
        window.location.href = 'login.php';
    });
});

function addItem() {
            const container = document.getElementById('itemsContainer');
            const newItem = document.createElement('div');
            newItem.classList.add('input-group', 'mb-2');
            newItem.innerHTML = `
                <input type="text" class="form-control" placeholder="Nombre del Artículo" aria-label="Nombre del Artículo">
                <input type="number" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
                <input type="number" class="form-control" placeholder="Precio Unitario" aria-label="Precio Unitario">
                <button class="btn btn-outline-secondary" type="button" onclick="removeItem(this)">Eliminar</button>
            `;
            container.appendChild(newItem);
        }

        function removeItem(button) {
            const container = document.getElementById('itemsContainer');
            container.removeChild(button.parentElement);
        }

        function addItem() {
            const container = document.getElementById('itemsContainer');
            const newItem = document.createElement('div');
            newItem.classList.add('input-group', 'mb-2');
            newItem.innerHTML = `
                <input type="text" class="form-control" placeholder="Nombre del Artículo" aria-label="Nombre del Artículo">
                <input type="number" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
                <input type="number" class="form-control" placeholder="Precio Unitario" aria-label="Precio Unitario">
                <button class="btn btn-outline-secondary" type="button" onclick="removeItem(this)">Eliminar</button>
            `;
            container.appendChild(newItem);
        }

        function removeItem(button) {
            const container = document.getElementById('itemsContainer');
            container.removeChild(button.parentElement);
        }

        function addItem() {
            const container = document.getElementById('itemsContainer');
            const newItem = document.createElement('div');
            newItem.classList.add('input-group', 'mb-2');
            newItem.innerHTML = `
                <input type="text" class="form-control" placeholder="Nombre del Artículo" aria-label="Nombre del Artículo">
                <input type="number" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
                <input type="text" class="form-control" placeholder="Motivo de Devolución" aria-label="Motivo de Devolución">
                <button class="btn btn-outline-secondary" type="button" onclick="removeItem(this)">Eliminar</button>
            `;
            container.appendChild(newItem);
        }

        function removeItem(button) {
            const container = document.getElementById('itemsContainer');
            container.removeChild(button.parentElement);
        }
 

    // script para registrar las compras 
        function addItem() {
            const container = document.getElementById('itemsContainer');
            const itemDiv = document.createElement('div');
            itemDiv.className = 'input-group mb-2';
            itemDiv.innerHTML = `
                <input type="text" class="form-control" placeholder="Nombre del Artículo" aria-label="Nombre del Artículo">
                <input type="number" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
                <input type="number" class="form-control" placeholder="Precio Unitario" aria-label="Precio Unitario">
                <button class="btn btn-outline-secondary" type="button" onclick="removeItem(this)">Eliminar</button>
            `;
            container.appendChild(itemDiv);
        }

        function removeItem(button) {
            button.parentElement.remove();
        }
    