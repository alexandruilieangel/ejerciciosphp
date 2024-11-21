<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $nacimiento = new DateTime($fecha_nacimiento);
    $hoy = new DateTime();
    $edad = $hoy->diff($nacimiento);
    
    echo "<h1>Tu edad es: " . $edad->y . " años</h1>";
}
?>
