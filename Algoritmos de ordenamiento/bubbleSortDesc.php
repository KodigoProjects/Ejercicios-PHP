<?php
function bubbleSortDesc(array $arr): array {
    $n = count($arr);

    // se iter sobre el arreglo hasta que se   ordene
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Comparar elementos adyacentes y ordenarlos en orden descendente
            if ($arr[$j] < $arr[$j + 1]) {
                // Intercambiar valores si no esta  en el orden correcto
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

$lista = [3, -1, 5, 7, 3, -2, 8, 5];
echo "Lista original: " . implode(", ", $lista) . "\n";

$listaOrdenada = bubbleSortDesc($lista);
echo "Lista ordenada (descendente): " . implode(", ", $listaOrdenada) . "\n";
?>
