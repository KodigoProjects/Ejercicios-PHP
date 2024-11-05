<?php

// Función que verifica si un número es primo
function esPrimo($num) {
    // Un # menor a 2 no es primo
    if ($num < 2) {
        return false;
    }

    // primero verifico si 'num' es divisible por algun nuermo desde 2 hasta la raíz cuadrada de 'num')
    for ($i = 2; $i <= sqrt($num); $i++) {
        // Si encontramos un divisor, no es primo
        if ($num % $i == 0) {
            return false;
        }
    }
    return true; // Si no encontramos divisores, es primo Y ASI
}
echo "¿Es 17 primo? " . (esPrimo(17) ? "Sí" : "No") . "\n";
?>
