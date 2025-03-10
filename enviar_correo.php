<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $comentario = $_POST["comentario"];

    // Dirección de correo electrónico donde se enviará el formulario
    $destinatario = "jacobo.fdezcerezo@gmail.com";

    // Asunto del correo electrónico
    $asunto = "Nuevo mensaje desde el formulario de contacto";

    // Cuerpo del correo electrónico
    $mensaje = "Nombre: $nombre\n";
    $mensaje .= "Apellido: $apellido\n";
    $mensaje .= "Email: $email\n";
    $mensaje .= "Teléfono: $telefono\n";
    $mensaje .= "Comentario o mensaje:\n$comentario";

    // Cabeceras del correo electrónico
    $headers = "From: $email";

    // Intenta enviar el correo electrónico
    if (mail($destinatario, $asunto, $mensaje, $headers)) {
        // Éxito
        header("Location: contacto.php?exito=1");
    } else {
        // Error
        header("Location: contacto.php?exito=0");
    }
} else {
    // Acceso no autorizado
    header("Location: contacto.php");
}
?>