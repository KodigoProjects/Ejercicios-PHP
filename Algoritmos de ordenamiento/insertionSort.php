<?php
function insertionSort(array $arr): array {
    $n = count($arr);
    // se copienza desde el segundo elemento hasta el final
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        // Mover los elementos mayores que "key" una posición hacia adelante
        while ($j >= 0 && strcasecmp($arr[$j], $key) > 0) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }

        // Insertar el elemento en su posición correcta
        $arr[$j + 1] = $key;
    }

    return $arr;
}

// Lista de nombres
$listaNombres = ["Carlos", "Ana", "mario", "Pedro", "Luisa", "Fernando"];
echo "Lista original: " . implode(", ", $listaNombres) . "\n";

$listaOrdenada = insertionSort($listaNombres);
echo "Lista ordenada (alfabéticamente): " . implode(", ", $listaOrdenada) . "\n";
?>
