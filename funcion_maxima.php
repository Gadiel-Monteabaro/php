<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
