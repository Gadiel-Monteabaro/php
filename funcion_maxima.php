<?php

$aNotas = array(9,10,5);

function maximo($array)
{
    $mayor = "";
    //definicion
    foreach ($array as $numero) {
        if ($numero > $mayor) {
            $mayor = $numero;
        }
    }

    return $mayor;
}


echo "La nota maxima es " . maximo($aNotas);
