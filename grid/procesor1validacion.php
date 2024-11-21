<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['opcion']) && (preg_match("/^opcion[1-2]$/", $_POST['opcion']))) {
        echo "<h1>Opción seleccionada correctamente</h1>";
    } else {
        echo "<h1>Error: Opción no válida</h1>";
    }
}
?>
