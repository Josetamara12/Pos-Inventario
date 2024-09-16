<?php

// Agrega esto al inicio de tu archivo auth.php para ver errores en pantalla
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start(); // Iniciar la sesión

$host = 'bcfxa9izmbe68thefrqb-mysql.services.clever-cloud.com';
$user = 'uqctyfrcyircvdoy';
$pass = '1ewvuWBoGA14d2WNlbfj';
$port = 3306;
$db_name = 'bcfxa9izmbe68thefrqb';

$conn = new mysqli($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    // Código para el registro de usuarios
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo']; 
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $genero = $_POST['genero'];
    $contacto = $_POST['contacto'];

    // Usar una consulta preparada para el registro de usuarios
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, correo, apellido, contacto, password, fecha_nacimiento, genero) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $nombre, $correo, $apellido, $contacto, $password, $fecha_nacimiento, $genero);

    if ($stmt->execute()) {
        // Redirige automáticamente a la página de inicio de sesión con un mensaje de éxito
        header('Location: login.php?registro=exitoso');
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
} else {
    // Código para el inicio de sesión
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    // Usar una consulta preparada para el inicio de sesión
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE nombre = ?");
    $stmt->bind_param("s", $nombre);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Autenticación exitosa, guarda el ID del usuario en la sesión
            $_SESSION['id_usuario'] = $row['id_usuario']; // Asegúrate de que la columna 'id' esté disponible en tu tabla
            echo 3;
            // Redirige al usuario a la página principal
            header('Location: index.php');
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
    $stmt->close();
}

$conn->close();
?>
