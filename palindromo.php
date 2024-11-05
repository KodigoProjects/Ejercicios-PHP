<?php

// Función que determina si una cadena de texto es un palíndromo 
/**¿que es un palidromo? Palabra o frase cuyas letras están dispuestas de tal manera que resulta la misma leída de izquierda a derecha que de derecha a izquierda; por ejemplo, anilina */
function esPalindromo($texto) {
    // primero convierto  el texto a minusculas y remuerv los espacios en blanco p
    $texto = strtolower(str_replace(' ', '', $texto));
    
    // Comparo el texto con su reverso
    return $texto === strrev($texto);
}

echo "¿Es 'Anita lava la tina' un palíndromo? " . (esPalindromo("Anita lava la tina") ? "Sí" : "No") . "\n";
echo "¿es Anilina un palíndromo? " . (esPalindromo("Anilina") ? "Sí" : "No") . "\n";
?>
