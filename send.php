<?php

if ($_SERVER["REQUEST_METHOD"] == "post") {
    // Obtener los datos del formulario
    $name = $_POST['name'];
    $asistencia = isset($_POST['asistencia']) ? "Asistire" : "No asistire";
    $mensaje = $_POST['comment'];

    // Configurar los detalles del correo electrónico
    $to = 'lupitaksb721@hmail.com';  // Cambia esto con la dirección de correo electrónico del destinatario
    $subject = 'Confirmación de asistencia a la boda';
    $message = "Nombre: " . $name . "\n";
    $message .= "Asistencia: " . $asistencia . "\n";
    $message .= "Mensaje: " . $comment . "\n";

    // Enviar el correo electrónico
    $headers = 'From: lupitaksb721@gmail.com' . "\r\n" .
        'Reply-To: lupitaksb721@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Correo electrónico enviado correctamente.";
    } else {
        echo "Error al enviar el correo electrónico.";
    }
}
?>
