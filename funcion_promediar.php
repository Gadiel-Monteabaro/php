<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aNotas = array(5, 8, 7);

function promediar($array)
{
    $sumar = 0;
    foreach ($array as $numero) {
        $sumar += $numero;
    }

    $promedio = $sumar / count($array);

    return $promedio;
}


echo "El promedio es " . promediar($aNotas) . "." . "<br>";
