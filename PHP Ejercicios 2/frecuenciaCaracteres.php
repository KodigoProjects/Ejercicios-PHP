<?php
function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i];
        
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
            $frecuencia[$caracter] = 1;
        }
    }
    
    return $frecuencia;
}

$cadena = "ejemplo de cadena";
$resultado = frecuenciaCaracteres($cadena);
print_r($resultado);
?>
