<?php

use Alumno as GlobalAlumno;
use Mpdf\Tag\Br;

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
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Legajo: " . $this->legajo . "<br>";
        echo "Nota Portfolio: " . $this->notaPortfolio . "<br>";
        echo "Nota PHP: " . $this->notaPhp . "<br>";
        echo "Nota proyecto: " . $this->notaProyecto . "<br>";
        echo "Promedio: " . $this->calcularPromedio() . "<br>";
    }
    public function calcularPromedio()
    {
        $promedio = ($this->notaPortfolio + $this->notaPhp + $this->notaProyecto) / 3;
        return number_format($promedio, "2", ",", ".");
    }
}

class docente extends Persona
{
    public $especialidad;

    const ESPECIALIDAD_WP="Wordpress"; // una constante no recibe el simbolo "$" y van en mayusculas.
    const ESPECIALIDAD_ECO="Economia Aplicada";
    const ESPECIALIDAD_BBDD="Base de Datos";

    public function imprimir()
    {
        echo "Nombre: " . $this->nombre . "<br>";
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
$alumno1->notaPortfolio = 8;
$alumno1->notaPhp = 9;
$alumno1->notaProyecto = 6;
$alumno1->imprimir();
$alumno1->calcularPromedio();


$docente1 = new Docente; //Inicializamos al primer docente.
$docente1->dni = "35252514";
$docente1->nombre = "Ezequiel Monteabaro";
$docente1->edad = "33";
$docente1->nacionalidad = "Argentina";
$docente1->especialidad = Docente::ESPECIALIDAD_ECO;
$docente1->imprimir();
$docente1->imprimirEspecialidadesHabilitadas();
