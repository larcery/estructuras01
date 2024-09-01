<?php
//  comprobar si un número es primo
function esPrimo($num) {
    if ($num <= 1) {
        return false; // Números menores o iguales a 1 no son primos
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false; // Si es divisible por algún número, no es primo
        }
    }
    return true; // Si no fue divisible, es primo
}

// Comprobar si N es primo
if (esPrimo($n)) {
    echo "3. $n es un número primo.\n";
} else {
    echo "3. $n no es un número primo.\n";
}
?>