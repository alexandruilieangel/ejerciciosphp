<?php
$n1 = 37; // Cambiar por el valor que desees

$es_primo = true;
for ($i = 2; $i <= sqrt($n1); $i++) {
    if ($n1 % $i == 0) {
        $es_primo = false;
        break;
    }
}

if ($es_primo && $n1 > 1) {
    echo "$n1 es primo.";
} else {
    echo "$n1 no es primo.";
}
?>
