<?php
/*
Incremento  y decremento => nos permite incrementar o decrementar una variable numerica en una unidad o varias dependiendo las especificacioness del desarrollador.
*/
$r = 8; // creamos las variables que queremos incrementar o decrementar.
$s = 3;

$r++; // equivale a decir $r = $r + 1, lo cual incrementamos el valor "8" a "9"
$s--; // equvale a decir $s = $s - 1, lo cual decrementamos el valor "3" a "2"

// tambien podemos asignar y despues incrementar o decrementar
++$r; // primero incrementa luego asigna el valor
$r++; // primero asigna el valor luego lo incrementa

/*
Control de flujo
if => Ejecuta una sentencia si una condicion especificada es evaluada como verdadera. si es falsa, otra sentencia puede ser ejecutada.
*/
//Syntaxis
if ('condicion') {
    //sentencia-1 ;
} else if ('condicion2') {
    //sentencia-2 ;
} else {
    //sentencia-3 ;
};

/*
Operador Ternario
Se usa como atajo para la intruccion if .
*/
//Syntaxis
'sentencia' ? $condicion == true : $condicon == false;  // escribimos codigo mas pequeño, en una sola linea

/*
Bucles
while => crea un bucle que ejecuta una sentencia especificada mientras cierta condicion se evalue como verdadera, la condicion es evaluada antes de ejecutar la sentencia.
*/
//Syntaxis
while ('condicion') {
    //sentencia ;
}

/*
do-while => Es parecido al 'while', nada mas que la exprecion se verifica al final de la ejecucion del programa y no al comienzo.
*/
//Syntaxis => solamente hay una sola syntaxis.
/*El bucle de arriba se ejecutaría exactamente una sola vez, ya que después de la primera iteración, cuando la expresión verdadera es verificada, se evalúa como false ($i no es mayor que 0) y termina la ejecución del bucle. */
$i = 0;
do {
    echo $i;
} while ($i > 0);

/*
for => Crea un bucle que consiste en tres expresiones opcionales, encerradas en paréntesis y separadas por puntos y comas, seguidas de una sentencia ejecutada en un bucle.  
*/
//Syntaxis
for (['expresion-inicial']; ['condicion']; ['expresion-final']) {
    //sentencia ;
}

/*
foreach => proporciona un modo sencillo de iterar sobre arrays. foreach funciona sólo sobre arrays y objetos, y emitirá un error al intentar usarlo con una variable de un tipo diferente de datos o una variable no inicializada.
*/
//Syntaxis
foreach ($array as $valor) {
    //sentencia ;
}

foreach ($array as $clave => $valor) {
    //sentencia ;
}
 
/*
Palabras Reservadas

break => interrumpe el bucle
continue => salta una condicion
exit => corta la ejecucion de codigo
return => devuelve un valor o sale del codigo
*/

/*
Prefijos para Formularios.
p -> puntero
s -> string
txt -> Caja de texto
lst -> Combo Desplegable
chk -> CheckBox
opt -> Option
btn -> Button
a -> array
b -> booleano
c -> char
d -> double
f -> function de eventos 
*/