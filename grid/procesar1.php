<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['email'];
    
    // Validación con expresión regular para el dominio
    if (!preg_match("/@iespabloserrano\.com$/", $correo)) {
        header("HTTP/1.1 400 Bad Request");
        echo "<h1>Error 400: Correo no válido</h1>";
        echo "<p>El correo electrónico debe pertenecer a la organización @iespabloserrano.com.</p>";
        exit();
    } else {
        echo "<h1>Correo válido</h1>";
        echo "<p>Gracias por enviar tu formulario.</p>";
    }
}
?>
