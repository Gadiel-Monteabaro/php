<?php
$aNotas = array(9, 12, 1, 1, 5, 4, 7, 4, 7, 4, 8, 4, 95, 0);

//definicion 
function contar($array)
{
    $contador = 0;
    foreach ($array as $numero) {
        $contador++;
    }
    return $contador++;
}

//uso

echo contar($aNotas);
