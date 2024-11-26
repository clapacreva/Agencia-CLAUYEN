<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];

    // Dirección de correo donde se enviará la información
    $to = "yenifermariasuarez@gmail.com";

    // Asunto del correo
    $subject = "Nuevo Registro de Usuario";

    // Cuerpo del mensaje
    $message = "
    Nombre: $nombre\n
    Apellido: $apellido\n
    Correo Electrónico: $correo\n
    Teléfono: $telefono\n
    Ciudad: $ciudad\n
    País: $pais
    ";

    // Encabezados del correo
    $headers = "From: $correo";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Formulario enviado con éxito.";
    } else {
        echo "Error al enviar el formulario.";
    }
}
?>
