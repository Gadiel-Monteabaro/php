<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Para organizar las clases vamos a escribir las clases por un lado y los objetos por el otro, de manera ordenada.

//Definiciones de las clases.
class Persona
{
    public $documento;
    public $nombreCompleto;
    public $telefono;
    public $correo;
    public $nacionalidad;
    public $fechaNac;
}

class Alumno extends Persona
{
    public $legajo;
    public $promedio;
    public $asistencia;
}
//Programa.
$alumno1 =  new Persona(); //se instancia la variable persona.
$alumno1->nombreCompleto = "Gadiel Silva";
$alumno1->fechaNac = "31/07/2022";
$alumno1->documento = "39622616";
$alumno1->nacionalidad = "Argentina";
$alumno1->correo = "silvagadiel96@gmail.com";
$alumno1->telefono = "+54 3518053537";

print_r($alumno1);

$alumno2 = new Persona(); //se instacia la variable persona nuevamente.
$alumno2->nombreCompleto = "Silva Ezequiel";
$alumno2->documento = "40525265";

print_r($alumno2);

$alumno3 = new Alumno(); //se instancia la variable Alumno.
$alumno3->promedio= "8";
$alumno3->legajo= "74171";
$alumno3->asistencia= "Sin Faltas";

print_r($alumno3);

