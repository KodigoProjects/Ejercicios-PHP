<?php

//funcion que inviernete un array
function listaInvertida($array) {
    //  array_reverse de PHP invierte un array
    return array_reverse($array);
}

$numeros = [1, 2, 3, 4, 5, 6];
$numerosInvertidos = listaInvertida($numeros);

// Muestra el resultado
echo "Lista original: ";
print_r($numeros);

echo "Lista invertida: ";
print_r($numerosInvertidos);

?>
