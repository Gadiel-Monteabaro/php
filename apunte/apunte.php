<?php
/*
Php - Hipertext Preprocessor 

Es un lenguaje de programacion de codigo abierto y de proposito general que se ejecuta del lado del servidor.

[=======Caracteristicas=======]

Interpretado - Compila una serie de instrucciones, que se ejecutan linea por linea hasta el final del script.

Embebido - Extiende la funcionalidad del HTML, proporcionandole dinamismo y haciendo que sea ideal para la web.

Multiplataforma - Puede emplearse en todos los sistemas operativos principales.

Multiparadigma - Se puede programar utilizando el paradigma de procedimientos y permite la programacion orientada a objetos y funcion.

[=======Ejecucion=======]

Un pedido a un servidor que ejecuta Php, puede retornar como respuesta HTML, CSS, JavaScript, imagenes o cualquier tipo de formato que pueda entender el navegador.



[=======Variables=======]

Una variable es una espacion reservado en la memoria, resive un nombre, donde esta variable puede contener una valor.
*/

//Esto es un comentario Lineal.    |
/*                                 |==>  [==Comentarios==]
Esto es un comentario Multilineal. |
*/

$nombre = 'Gadiel'; // Dato tipo String
$apellido = 'Silva Monteabaro'; // Dato tipo String
$edad = 25; // Dato tipo Numerico Entero
$casado = false; // Dato tipo Booleano
$sueldo = 200.25; // Dato tipo Numerio Decimal

echo "Nombre: $nombre $apellido <br>";
print_r(" Edad: $edad Años <br>");

/*
[=======Arrays=======]
*/

$miArray = array(); // $miArray = array('Hola','Chau')
$miArray[0] = 'Hola';
$miArray[1] = 'Chau';
$miArray[2] = true;
$miArray[3] = 26;

echo $miArray[0] . '<br>'; // Muestra 'Hola'
print_r($miArray);
var_dump($miArray);


