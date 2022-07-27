<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definicion 
function print_f($var)
{
    if (is_array($var)) {

        $archivo = fopen("datos.txt", 'a+');

        //Si es un array, recorro el contenido y lo guardo en el archivo "datos.txt"
        foreach ($var as $elm) {
            fwrite($archivo, "\n" . $elm);
        }

        fclose($archivo);
    } else {
        //Entonces es un string, guardo la variable en le archivo "datos.txt"
        file_put_contents("datos.txt", $var);
    }

    echo "Archivo Generado.";
}


//Uso

$aNotas = array(8, 5, 7, 9, 10);
$msj = "Este es un mensaje! ";
print_f($aNotas);
