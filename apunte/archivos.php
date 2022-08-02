<?php
/*
PHP - Archivos
    PHP nos permite generar archivos, insertar, eliminar o actualizar datos.
    Para ello PHP, brinda una serie de funciones que nos permitira trabajar con los archivos generados.
 */

// fopen => Abre un archivo y devuelve un puntero al archivo.
//Syntaxis
$archivo1 = fopen($nombreArchivo, $modo);
/*
Modos posibles
r => abre un archivo solo en modo lectura
r+ => abre un archivo para leer o escribir
w => solo permite escribir y no leer
w+ => permite leer o escribie un archivo, si no existe crea el archivo 
a => agrega al final
a+ => agrega al final, si no existe crea el archivo
*/

