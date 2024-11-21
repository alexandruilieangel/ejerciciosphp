<?php
$suma = 0;
$intento = 1;
while ($suma < 100) {
    $dado = rand(1, 6);
    $suma += $dado;
    echo "Lanzamiento $intento: $dado, Suma acumulada: $suma<br>";
    $intento++;
}
?>
