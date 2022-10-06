<?php

// Funciones PHP

//print_r(); -> Imprime informacion legible para humanos sobre una variable.
$b = array('m' => 'mono', 'foo' => 'bar', 'x' => array('x', 'y', 'z'));
$resultados = print_r($b, true); // $resultados contiene ahora la salida de print_r

//var_dump(); ->Muestra informacaión sobre una variable
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);

//date(); -> Dar formato a la fecha/hora local. 
echo date('d/m/y'); //Hay varios tipos de caracteres de formato. (Ver documentacion PHP)

//rand(); -> Genera un Numero Entero aleatorio. 
$numeroAleatorio = rand(5, 15); //Generara un número aleatorio entre 5 y 15.
