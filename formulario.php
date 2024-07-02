<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de registro</title>
</head>
<body>
    <h1>Formulario de registro</h1>
    <form action="submit.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <label for="sexo">Sexo:</label>
        <input type="radio" id="hombre" name="sexo" value="hombre" required>
        <label for="hombre">hombre</label>
        <input type="radio" id="mujer" name="sexo" value="mujer" required>
        <label for="mujer">mujer</label><br><br>

        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <label for="poblacion">Población:</label>
        <select id="poblacion" name="poblacion" required>
            <option value="Alicante">Alicante</option>
            <option value="Madrid">Madrid</option>
            <option value="Barcelona">Barcelona</option>
            <option value="Barcelona">Valencia</option><br><br>

            <!-- Puedes agregar más opciones según sea necesario -->
        </select>
        <br><br>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" rows="4"></textarea><br><br>

        <div class="checkboxes">
            <input type="checkbox" id="ofertas" name="ofertas">
            <label for="ofertas">Deseo recibir información sobre novedades y ofertas</label><br><br>
        </div>

        <div class="checkboxes">
            <input type="checkbox" id="condiciones" name="condiciones" required>
            <label for="condiciones">Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos</label><br><br>
        </div>

        <input type="submit" value="Enviar">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $sexo = $_POST['sexo'];
    $correo = $_POST['correo'];
    $poblacion = $_POST['poblacion'];
    $descripcion = $_POST['descripcion'];
    $ofertas = isset($_POST['ofertas']) ? 'Sí' : 'No';
    $condiciones = isset($_POST['condiciones']) ? 'Aceptadas' : 'No aceptadas';

    echo "<h1>Datos recibidos</h1>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Apellidos:</strong> $apellidos</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Población:</strong> $poblacion</p>";
    echo "<p><strong>Descripción:</strong> $descripcion</p>";
    echo "<p><strong>Desea recibir información sobre novedades y ofertas:</strong> $ofertas</p>";
    echo "<p><strong>Condiciones generales y normativa sobre protección de datos:</strong> $condiciones</p>";
}
?>

</body>
</html>