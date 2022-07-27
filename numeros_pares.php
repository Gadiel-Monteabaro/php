<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$numeros = 1;
/* 
while ($numeros <= 100) {
    if ($numeros == 60) {
        break;
    } else if (!($numeros % 2)) {
        echo $numeros;
    }
    $numeros++;
}
*/

//otra forma .

for ($i = 2; $i <= 100; $i += 2) {
// imprimimos el valor  inicial junto con un salto de linea.
    echo $i . "<br>";
    //Si el numero llega a  60, realiazamos un break.
    if ($numeros == 60) {
        break;
    }
}
