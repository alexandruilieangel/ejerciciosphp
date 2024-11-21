<?php
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $dado = rand(1, 6);
    $suma += $dado;
    echo "Lanzamiento $i: $dado, Suma acumulada: $suma<br>";
}
?>
