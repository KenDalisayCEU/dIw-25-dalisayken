<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $nombre = !empty($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : 'No proporcionado';
    $correo = !empty($_POST['correo']) ? htmlspecialchars($_POST['correo']) : 'No proporcionado';
    $telefono = !empty($_POST['telefono']) ? htmlspecialchars($_POST['telefono']) : 'No proporcionado';
    $asunto = !empty($_POST['asunto']) ? htmlspecialchars($_POST['asunto']) : 'No proporcionado';
    $mensaje = !empty($_POST['mensaje']) ? htmlspecialchars($_POST['mensaje']) : 'No proporcionado';
    $token = !empty($_POST['token']) ? htmlspecialchars($_POST['token']) : 'No proporcionado';

    echo "<h2>Mensaje recibido</h2>";
    echo "<strong>Nombre:</strong> $nombre<br>";
    echo "<strong>Correo:</strong> $correo<br>";
    echo "<strong>Teléfono:</strong> $telefono<br>";
    echo "<strong>Asunto:</strong> $asunto<br>";
    echo "<strong>Mensaje:</strong><br> <pre>$mensaje</pre><br>";
    echo "<strong>Token de seguridad:</strong> $token<br>";

} else {
    echo "No se recibieron datos ";
}
?>
