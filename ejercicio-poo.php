<?php

use Alumno as GlobalAlumno;
use Mpdf\Tag\Br;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Persona
{
    protected $dni;
    protected $nombre;
    protected $edad;
    protected $nacionalidad;

    public function setDni($dni)
    {
        $this->dni = $dni;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;
    }

    public function imprimir()
    {
    }
}

class Alumno extends Persona
{
    private $legajo;
    private $notaPortfolio;
    private $notaPhp;
    private $notaProyecto;
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
        return number_format($promedio, "2", ",", ".") . "<br>";
    }
}

class docente extends Persona
{
    private $especialidad;

    const ESPECIALIDAD_WP = "Wordpress"; // una constante no recibe el simbolo "$" y van en mayusculas.
    const ESPECIALIDAD_ECO = "Economia Aplicada";
    const ESPECIALIDAD_BBDD = "Base de Datos";

    public function imprimir()
    {
        echo "Nombre: " . $this->nombre . "<br>";
    }
    public function imprimirEspecialidadesHabilitadas()
    {
        echo "Un docente puede tener las siguientes especialidades:<br>";
        echo  "Especialidad 1:" . self::ESPECIALIDAD_BBDD . "." . "<br>";
        echo  "Especialidad 2:" . self::ESPECIALIDAD_ECO . "." . "<br>";
        echo  "Especialidad 3:" . self::ESPECIALIDAD_WP . "." . "<br>";
    }
}

// Programa

$alumno1 = new Alumno(); //Inicializamos al primer alumno 
$alumno1->legajo = "74171";
$alumno1->setNacionalidad("Argentina");
$alumno1->setNombre("Gadiel Silva");
$alumno1->setDni("39622616");
$alumno1->setEdad("26");
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
