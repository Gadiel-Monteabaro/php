<?php

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
'sentencia' ? $condicion == true : $condicon == false;

/*
Bucles
while => crea un bucle que ejecuta una sentencia especificada mientras cierta condicion se evalue como verdadera, la condicion es evaluada antes de ejecutar la sentencia.
*/
//Syntaxis
while ('condicion') {
    //sentencia ;
}

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
foreach ($array as $valor) {
    //sentencia ;
}
