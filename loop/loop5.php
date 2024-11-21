<?php
$n1 = 10; // Cambiar por el valor que desees

if ($n1 < 0) {
    $n1 = abs($n1);
}

for ($i = $n1; $i >= 0; $i--) {
    echo $i . "<br>";
}
?>
