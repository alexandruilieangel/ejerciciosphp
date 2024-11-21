<?php
$lluvia = true; // Cambiar por true o false
$temperatura = 25; // Cambiar por el valor de temperatura

if ($temperatura < -10 || $temperatura > 40) {
    echo "La temperatura es $temperatura y es una temperatura extrema. No se puede realizar actividad.";
} else {
    if ($temperatura > 20 && !$lluvia) {
        echo "La temperatura es $temperatura y no llueve. A la playa.";
    } elseif ($temperatura >= -10 && $temperatura <= 5 && !$lluvia) {
        echo "La temperatura es $temperatura y no llueve. A esquiar.";
    } elseif ($temperatura > 5 && $temperatura <= 20 && !$lluvia) {
        echo "La temperatura es $temperatura y no llueve. De paseo.";
    } elseif ($lluvia) {
        echo "Hoy llueve y debes quedarte en casa.";
    }
}
?>
