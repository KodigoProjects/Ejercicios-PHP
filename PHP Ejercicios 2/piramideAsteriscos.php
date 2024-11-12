<?php
function piramideAsteriscos($n) {
    for ($i = 1; $i <= $n; $i++) {
        // Espacios en blanco
        for ($j = 1; $j <= $n - $i; $j++) {
            echo " ";
        }
        // Asteriscos
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "\n";
    }
}

$n = 5; 
piramideAsteriscos($n);
?>
