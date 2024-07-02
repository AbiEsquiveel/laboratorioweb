<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Stylee.css">
    <title>Resultado de estudios</title>
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sanitiza los datos para evitar XSS
            $nombre = $_POST["nombre"];
            $estudios = $_POST["estudios"];

            echo "<h2>Resultado del Formulario</h2>";
            echo "Nombre: " . $nombre . "<br>";
            echo "Estudios: " . $estudios;
        } else {
            echo "<h2>No se enviaron datos del formulario.</h2>";
        }
        ?>
    </div>
</body>
</html>