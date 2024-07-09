<link rel="stylesheet" href="stylepedidos.css">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $pizzas = isset($_POST['pizzas']) ? $_POST['pizzas'] : array();
    
    $cantidad_jamon_y_queso = isset($_POST['cantidad_jamon_y_queso']) ? intval($_POST['cantidad_jamon_y_queso']) : 0;
    $cantidad_napolitana = isset($_POST['cantidad_napolitana']) ? intval($_POST['cantidad_napolitana']) : 0;
    $cantidad_mozzarella = isset($_POST['cantidad_mozzarella']) ? intval($_POST['cantidad_mozzarella']) : 0;


    echo "<h2>Resumen del Pedido</h2>";
    echo "-Nombre: $nombre<br>";
    echo "-Dirección: $direccion<br>";

    if (!empty($pizzas)) {
        echo "<h3>Pizzas solicitadas:</h3>";
        foreach ($pizzas as $pizza) {
            switch ($pizza) {
                case "Jamon y queso":
                    echo "-Jamon y queso: $cantidad_jamon_y_queso<br>";
                    break;
                case "Napolitana":
                    echo "-Napolitana: $cantidad_napolitana<br>";
                    break;
                case "Mozzarella":
                    echo "-Mozzarella: $cantidad_mozzarella<br>";
                    break;
            }
        }
    } else {
        echo "No se seleccionó ninguna pizza.<br>";
    }

}
?>