<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Ejercicio de stock.

$stock = 800;

//ingresar condicion mayor a 0.

if ($stock > 0) {
    //en caso de que la condicion se cumpla realizar:
    echo "hay stock";
} else {
    //en caso contrario, realizar:
    echo "no hay stock";
}
