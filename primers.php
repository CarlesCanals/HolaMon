<?php

function esPrimer($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function mostrarPrimers($n) {
    $primers = [];
    $num = 2;

    while (count($primers) < $n) {
        if (esPrimer($num)) {
            $primers[] = $num;
        }
        $num++;
    }

    return $primers;
}

// Exemple: Mostrar els primers 10 nombres primers
$nombres = 20;
$nombresPrimers = mostrarPrimers($nombres);

// Mostrar els resultats
echo "Els primers " . $nombres . " nombres primers són: <br>" . implode("<br>", $nombresPrimers);

?>
