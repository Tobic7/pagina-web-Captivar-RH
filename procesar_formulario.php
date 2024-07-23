<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_empresa = htmlspecialchars(trim($_POST['nombre_empresa']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telefono = htmlspecialchars(trim($_POST['telefono']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    if (!empty($nombre_empresa) && !empty($email) && !empty($telefono) && !empty($mensaje)) {

        $to = "tobicaminos5@gmail.com"; // Cambiar al correo de la empresa
        $subject = "Nuevo mensaje de la Web";
        $body = "Nombre de la Empresa: $nombre_empresa\n";
        $body .= "Email: $email\n";
        $body .= "Teléfono: $telefono\n";
        $body .= "Mensaje:\n$mensaje";

        $headers = "From: $email";

        // Enviar el correo
        if (mail($to, $subject, $body, $headers)) {
            echo "Mensaje enviado exitosamente.";

        } else {
            echo "Error al enviar el mensaje. Inténtalo de nuevo más tarde.";
        }

    } else {
        echo "Por favor, complete todos los campos.";
    }
}
?>
