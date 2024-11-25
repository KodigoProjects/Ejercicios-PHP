<?php
function mergeSort(array $arr): array {
    if (count($arr) <= 1) {
        return $arr; // Caso base: listas de un solo elemento ya estan ordenadas
    }

    // Dividir el arreglo en mitades
    $mid = intdiv(count($arr), 2);
    $left = array_slice($arr, 0, $mid);
    $right = array_slice($arr, $mid);

    // Ordenar cada mitad recursivamente
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Combinar las mitades ordenadas
    return merge($left, $right);
}

function merge(array $left, array $right): array {
    $result = [];
    $i = $j = 0;

    // Combinar los arreglos en orden alfabético
    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) <= 0) {
            $result[] = $left[$i++];
        } else {
            $result[] = $right[$j++];
        }
    }

    // Agregar los elementos restantes
    while ($i < count($left)) {
        $result[] = $left[$i++];
    }
    while ($j < count($right)) {
        $result[] = $right[$j++];
    }

    return $result;
}

// Lista de palabras a ordenar
$listaPalabras = ["perro", "gato", "Árbol", "león", "tigre", "elefante"];
echo "Lista original: " . implode(", ", $listaPalabras) . "\n";

$listaOrdenada = mergeSort($listaPalabras);
echo "Lista ordenada (alfabéticamente): " . implode(", ", $listaOrdenada) . "\n";
?>
