<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $name = $_POST['name'];
    $asistencia = isset($_POST['asistencia']) ? "Sí" : "No";
    $mensaje = $_POST['comment'];

    // Configurar los detalles del correo electrónico
    $to = 'destinatario@example.com';  // Cambia esto con la dirección de correo electrónico del destinatario
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
