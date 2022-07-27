<?php

//Indicadores de posibles errores.

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definicion 
function print_f($var)
{
    //Preguntamos si la variable que ingresa como parametro es un array
    if (is_array($var)) {
        //Primero abrimos el archivo y declaramos como queremos ver la informacion, en este caso "a+"
        $archivo = fopen("datos.txt", 'a+');

        //Si es un array, recorro el contenido y lo guardo en el archivo "datos.txt"
        foreach ($var as $elm) {
            fwrite($archivo, "\n" . $elm);
        }
        //Cerramos el archivo
        fclose($archivo);

        //Si no es un array, puede ser cualquier dato como un 'string'
    } else {
        //Entonces es un string, guardo la variable en le archivo "datos.txt"
        file_put_contents("datos.txt", $var);
    }
    //Imprimimos un mensaje 
    echo "Archivo Generado.";
}


//Uso

$aNotas = array(8, 5, 7, 9, 10);
$msj = "Este es un mensaje! ";
print_f($aNotas);


