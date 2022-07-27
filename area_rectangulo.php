<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//definicion
function calcularAreaRect ($base,$altura){
    return $base * $altura;
}

//uso
echo "El area es ". calcularAreaRect(500,100);

