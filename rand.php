<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//la funcion rand (x,y); genera un numero dentro del rango establecido.

$valor = rand(1, 5);

if ($valor % 2 == 0) {
    //si el valor es divisible por dos, entonces:
    echo "El número $valor, es Par.";
} else {
    //si el valor no es divisible por dos, entonces:
    echo "El número $valor, es Impar.";
}
