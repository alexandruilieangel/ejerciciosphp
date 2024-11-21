<?php
$n1 = rand(0, 20);
$n2 = rand(0, 20);
$n3 = rand(0, 20);

echo "n1 = $n1, n2 = $n2, n3 = $n3<br>";

$numeros = array($n1, $n2, $n3);
rsort($numeros);

echo "Números ordenados de mayor a menor: " . implode(", ", $numeros);
?>
