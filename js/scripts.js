// scripts.js

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Previene el envío normal del formulario
        // Aquí podrías hacer la solicitud al servidor con AJAX si lo deseas
        // Redirige al usuario a la página de inicio de sesión
        window.location.href = 'login.php';
    });
});
