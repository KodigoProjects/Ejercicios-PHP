<?php
//funcion que suma los numeros pares de un array
function sumaPares($array) {
    $suma = 0;

    foreach ($array as $num) {
        // Si el num es par, se suma
        if ($num % 2 === 0) 
            $suma += $num;
    }

    return $suma;
}

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "La suma de los números pares es: " . sumaPares($numeros) . "\n";

?>
