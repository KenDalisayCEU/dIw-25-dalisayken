<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $usuario = !empty($_POST['usuario']) ? htmlspecialchars($_POST['usuario']) : 'No proporcionado';
    $nombre = !empty($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : 'No proporcionado';
    $correo = !empty($_POST['correo']) ? htmlspecialchars($_POST['correo']) : 'No proporcionado';
    $contrasena = !empty($_POST['contrasena']) ? htmlspecialchars($_POST['contrasena']) : 'No proporcionada';
    $fecha = !empty($_POST['fecha']) ? htmlspecialchars($_POST['fecha']) : 'No proporcionada';
    $genero = !empty($_POST['genero']) ? htmlspecialchars($_POST['genero']) : 'No proporcionado';
    $hobby = !empty($_POST['hobby']) ? htmlspecialchars($_POST['hobby']) : 'No proporcionado';
    $pais = !empty($_POST['pais']) ? htmlspecialchars($_POST['pais']) : 'No proporcionado';

    echo "<h2>Datos del usuario registrado</h2>";
    echo "<strong>Usuario:</strong> $usuario<br>";
    echo "<strong>Nombre completo:</strong> $nombre<br>";
    echo "<strong>Correo:</strong> $correo<br>";
    echo "<strong>Contraseña:</strong> $contrasena<br>";
    echo "<strong>Fecha de nacimiento:</strong> $fecha<br>";
    echo "<strong>Género:</strong> $genero<br>";
    echo "<strong>Hobby / Intereses:</strong> $hobby<br>";
    echo "<strong>País:</strong> $pais<br>";

   
    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
        $nombreArchivo = $_FILES['foto']['name'];
        $tipoArchivo = $_FILES['foto']['type'];
        $tamanoArchivo = $_FILES['foto']['size'];
        echo "<strong>Foto de perfil:</strong> $nombreArchivo ($tipoArchivo, $tamanoArchivo bytes)<br>";
    } else {
        echo "<strong>Foto de perfil:</strong> No se subió ninguna foto.<br>";
    }

} else {
    echo "No se recibieron datos del formulario.";
}
?>
