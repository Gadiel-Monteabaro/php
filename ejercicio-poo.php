<?php

use Alumno as GlobalAlumno;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Persona
{
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;
    public function imprimir()
    {
    }
}

class Alumno extends Persona
{
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;
    public function __construct()
    {
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    }
    public function imprimir()
    {
    }
    public function calcularPromedio()
    {
    }
}

class docente extends Persona
{
    public $especialidad;
    public function imprimir()
    {
    }
    public function imprimirEspecialidadesHabilitadas()
    {
    }
}

// Programa

$alumno1 = new Alumno(); //Inicializamos al primer alumno 
$alumno1->legajo = "74171";
$alumno1->nacionalidad = "Argentina";
$alumno1->nombre = "Gadiel Silva";
$alumno1->dni = "39622616";
$alumno1->edad = "26";
$alumno1->imprimir();
$alumno1->calcularPromedio();
print_r($alumno1);

$docente1 = new Docente; //Inicializamos al primer docente.
$docente1->dni = "35252514";
$docente1->nombre = "Ezequiel Monteabaro";
$docente1->edad = "33";
$docente1->nacionalidad = "Argentina";
$docente1->especialidad = "Programacion";
$docente1->imprimir();
$docente1->imprimirEspecialidadesHabilitadas();

print_r($docente1);
