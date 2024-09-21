        document.getElementById('purchaseForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita el envío tradicional del formulario

            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            fetch('/api/shopping', { // Asegúrate de que esta URL sea la correcta para tu backend
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data),
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(err => {
                        throw new Error(err.error || 'An error occurred');
                    });
                }
                return response.json();
            })
            .then(result => {
                alert('Compra registrada con éxito'); // Mensaje de éxito
                console.log(result); // Imprime la respuesta en la consola para depuración
                // Puedes redirigir al usuario a otra página o limpiar el formulario si lo deseas
                document.getElementById('purchaseForm').reset();
            })
            .catch(error => {
                alert('Error al registrar la compra: ' + error.message); // Mensaje de error
                console.error('Error:', error);
            });
        });
    

        // Función para agregar un nuevo artículo al formulario //para las devoluciones. 
        function addItem() {
            const container = document.getElementById('itemsContainer');
            const newItem = document.createElement('div');
            newItem.className = 'input-group mb-2';
            newItem.innerHTML = `
                <input type="text" class="form-control" placeholder="Nombre del Artículo" aria-label="Nombre del Artículo">
                <input type="number" class="form-control" placeholder="Cantidad" aria-label="Cantidad">
                <input type="text" class="form-control" placeholder="Motivo de Devolución" aria-label="Motivo de Devolución">
                <button class="btn btn-outline-secondary" type="button" onclick="removeItem(this)">Eliminar</button>
            `;
            container.appendChild(newItem);
        }

        // Función para eliminar un artículo del formulario
        function removeItem(button) {
            const container = document.getElementById('itemsContainer');
            container.removeChild(button.parentElement);
        }
