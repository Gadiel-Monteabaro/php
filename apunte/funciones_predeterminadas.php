<?php
/*
PHP - brinda funcionmes predeterminadas que nos permite agilizar nuestro codigo.
*/

// count => Cuenta todos los elementos de un array o algo de un objeto
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a)); // var_dump => muestra informacion sobre una variable



// number_format => Formatea una expresion numerica en el formato que deseamos.
$importe = 1050.95;

echo "$" . number_format($importe, 2, ',', '.'); // imprime el valor de la variable importe = $ 1.050,95

// date_format => convierte un string de fecha y lo pasa a formato español.
$strFecha = "2020-06-18";

echo date_format(date_create($strFecha), 'd/m/y'); // imprime => 18-06-2020

/*
Inclusion de archivos.

include => La sentencia 'include' incluye y evalúa el archivo especificado. Los archivos son incluidos con base en la ruta de acceso dada.
Cuando se incluye un archivo, el código que contiene hereda el ámbito de las variables de la línea en la cual ocurre la inclusión.

include_once => incluye y evalua el fichero especificado ejecutadd durante el script. La diferencia con 'include', el fichero solamente sera incluido una sola vez.
*/

include_once("header.php"); // incluyte el codigo que se encuetera escrito dentro del archivo 'header.php'

/*
require => 'require' es idéntico a 'include' excepto que en caso de fallo producirá un error fatal de nivel E_COMPILE_ERROR. En otras palabras, éste detiene el script mientras que include sólo emitirá una advertencia (E_WARNING) lo cual permite continuar el script.

tambien existe include_once.
*/

/*
Mostrar errores en php.
*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
