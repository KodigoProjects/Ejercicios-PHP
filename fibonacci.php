<?php

// Problema de la serie Fibonacci (me recuerda al retoceso de fibonacci en TradingView) 
function generarFibonacci($n) {
    // primeros 2 terminos de la seria wii
    $fibonacci = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        // Cada nuevo término es la suma de los dos anteriores
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return array_slice($fibonacci, 0, $n); // Retornamos solo los primeros 'n'
}

print_r(generarFibonacci(10)); // imprimo los primeros 10 terminos de la serie
?>
