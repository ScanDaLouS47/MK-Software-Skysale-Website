<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$destino = "mksoftwarelatam@gmail.com";
$asunto = "Consulta Pagina Web MK Software";

$contenido = "Nombre: $nombre\nCorreo: $email\nMensaje:\n$mensaje";

mail($destino, $asunto, $contenido);
header("Location: index.html");
?>
