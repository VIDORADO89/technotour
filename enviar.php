<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Definir el correo electrónico de destino
    $destino = "reycuasa@hotmail.com"; // Cambia esto por tu correo
    $asunto = "Nuevo mensaje de contacto";

    // Construir el cuerpo del correo
    $cuerpo = "Has recibido un nuevo mensaje de contacto:\n\n";
    $cuerpo .= "Nombre: $nombre\n";
    $cuerpo .= "Correo Electrónico: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";

    // Encabezados
    $encabezados = "From: $email";

    // Enviar el correo
    if (mail($destino, $asunto, $cuerpo, $encabezados)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.";
    }
}
?>