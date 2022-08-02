<?php
/*
PHP - Archivos
    PHP nos permite generar archivos, insertar, eliminar o actualizar datos.
    Para ello PHP, brinda una serie de funciones que nos permitira trabajar con los archivos generados.
 */

// fopen => Abre un archivo y devuelve un puntero al archivo.
//Syntaxis
$nameFile = "datos.txt";
$archivo1 = fopen($nameFile, $mode);
/*
Modos posibles
r => abre un archivo solo en modo lectura
r+ => abre un archivo para leer o escribir
w => solo permite escribir y no leer
w+ => permite leer o escribir un archivo, si no existe crea el archivo 
a => agrega al final
a+ => agrega al final, si no existe crea el archivo
*/
// CUIDADO => No es lo mismo abrir el archivo en modo 'r' que en 'a'

// fwrite => Escribe en el archivo
fwrite($archivo1, '1'); // Escribe en el archivo '1'

// fclese => Cierra el archivo
fclose($archivo1); // Cierra el archivo

// fread => Lectura de un archivo 
$tamanio = filesize($nameFile); // Me devuelve el tamaño del archivo en bytes.
$contenido = fread($archivo1, $tamanio); // Lee un archivo, hasta el tamaño especificado

//file_get_contents => Levanta un archivo en cadena de texto
$contenido = file_get_contents($nameFile); // Equivale a hacer un 'fopen', 'fread', 'fclose'

//file_put_contents => Esta funcion sobreescribe los datos del archivo.
$nombre = "Gadiel Silva";
file_put_contents($nameFile, $nombre);

/*
Un archivo de texto pouede ser demasiado grande, entonces lo que hacemos es leerlo linea por linea, ya que puede provocar de memoria.
*/
// la escritura seria:
$archivo = fopen($nameFile, 'r');
if ($archivo) {
    //leemos la linea
    while ($fila = fgets($archivo) == true) {
        echo $fila;
    }
}
fclose($archivo);

// file_exists => permite saber si un archivo existe o no.
file_exists($nameFile);

// is_array => Nos permite saber si el contenido de una variable es un array.
$aArray = array();

if (is_array($aArray)) {
    echo "Esto es un array.";
} else {
    echo "Esto no es un array, es otro tipo de dato.";
}
