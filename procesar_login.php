<?php
// Establecer la conexión a la base de datos
include 'database_config.php';

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];

// Consulta para verificar la existencia del usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE nombre='$nombre' AND apellido='$apellido'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Inicio de sesión exitoso. ¡Bienvenido, $nombre $apellido!";
} else {
    echo "Inicio de sesión fallido. Usuario no encontrado.";
}

$conn->close();
?>
