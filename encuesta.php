<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $nombre = !empty($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : 'No proporcionado';
    $edad = !empty($_POST['edad']) ? intval($_POST['edad']) : 'No proporcionada';
    $fecha = !empty($_POST['fecha']) ? htmlspecialchars($_POST['fecha']) : 'No proporcionada';
    $calificacion = !empty($_POST['calificacion']) ? intval($_POST['calificacion']) : 'No proporcionada';
    $color = !empty($_POST['color']) ? htmlspecialchars($_POST['color']) : 'No proporcionado';


    $servicios = !empty($_POST['servicios']) ? $_POST['servicios'] : [];

    echo "<h2>Resultados de la encuesta</h2>";
    echo "<strong>Nombre:</strong> $nombre<br>";
    echo "<strong>Edad:</strong> $edad<br>";
    echo "<strong>Fecha de visita:</strong> $fecha<br>";
    echo "<strong>Calificación:</strong> $calificacion<br>";
    echo "<strong>Color favorito:</strong> <span style='color:$color;'>$color</span><br>";

    echo "<strong>Servicios utilizados:</strong><br>";
    if (!empty($servicios)) {
        echo "<ul>";
        foreach ($servicios as $servicio) {
            echo "<li>" . htmlspecialchars($servicio) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No se han seleccionado servicios.<br>";
    }

} else {
    echo "No se recibieron datos.";
}
?>
