<?php

// Funciones PHP

//print_r(); -> Imprime informacion legible para humanos sobre una variable.
$b = array('m' => 'mono', 'foo' => 'bar', 'x' => array('x', 'y', 'z'));
$resultados = print_r($b, true); // $resultados contiene ahora la salida de print_r

//var_dump(); -> Muestra informacaión sobre una variable
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);

//date(); -> Dar formato a la fecha/hora local. 
echo date('d/m/y'); //Hay varios tipos de caracteres de formato. (Ver documentacion PHP)

//rand(); -> Genera un Numero Entero aleatorio. 
$numeroAleatorio = rand(5, 15); //Generara un número aleatorio entre 5 y 15.

//count(), -> Cuenta todos los elementos de un array o algo de un objeto.
$a = array();
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a)); //Devuelve 3.

//number_format(); -> Formatear un número con los millares agrupados.
$numero = 1234.56;
$nombre_format_francais = number_format($número, 2, ',', '.'); // 1.234,56

//date_format(); -> Convierte un string de fecha y lo pasa a formato español.
$strFecha = "2022-10-06";
echo date_format(date_create($strFecha), 'd/m/Y'); //06-10-2022

//include_once(); -> La sentencia include_once incluye y evalúa el fichero especificado durante la ejecución del script.
include_once('header.php');

//Mostrar errores de PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
