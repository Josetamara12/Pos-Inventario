<?php
session_start(); // Iniciar la sesión

$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'inventario';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    // Código para el registro de usuarios
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $contacto = $_POST['contacto'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];

    $sql = "INSERT INTO usuarios (nombre, apellido, contacto, password, fecha_nacimiento, genero) VALUES ('$nombre', '$apellido', '$contacto', '$password', '$fecha_nacimiento', '$genero')";

    if ($conn->query($sql) === TRUE) {
        // Redirige automáticamente a la página de inicio de sesión después de un registro exitoso
        header('Location: login.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Código para el inicio de sesión
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE nombre='$nombre'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Autenticación exitosa, guarda el ID del usuario en la sesión
            $_SESSION['user_id'] = $row['id']; // Asegúrate de que la columna 'id' esté disponible en tu tabla

            // Redirige al usuario a la página principal
            header('Location: index.php');
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}

$conn->close();
?>
