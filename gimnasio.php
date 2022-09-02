<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Persona
{
    protected $dni;
    protected $nombre;
    protected $correo;
    protected $celular;

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}

class Alumno extends Persona
{
    private $fechaNac;
    private $peso;
    private $altura;
    private $aptoFisico;
    private $presentismo;

    public function __construct()
    {
        $this->peso = 0.0;
        $this->altura = 0.0;
        $this->presentismo = 0.0;
        $this->aptoFisico = false;
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }



    public function setFichaMedica()
    {
    }
}

class Entrenador extends Persona
{
    private $aClases;

    public function __construct()
    {
        $this->aClases = array();
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function asignarClase()
    {
    }
}

class Clase
{
    private $nombre;
    private $entrenador;
    private $aAlumnos;

    public function __construct()
    {
        $this->aAlumnos = array();
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function asignarEntrenador($entrenador)
    {
        $this->entrenador = $entrenador;
    }


    public function inscribirAlumno($alumno)
    {
        $this->aAlumnos = $alumno;
    }

    public function imprimirListado()
    {
    }
}

//Desarrollo del Programa

$entrenador1 = new Entrenador("34987789", "Miguel Ocampo", "miguel@email.com", "11678634");
$entrenador2 = new Entrenador("28987589", "Andrea Zarate", "amdrea@email.com", "11768654");

$alumno1 = new Alumno("40787657", "Dante Montera", "dante@email.com", "1145632457", "1997-08-28");
$alumno1->setFichaMedica(90, 178, true);
$alumno1->presentismo = 78;

$alumno2 = new Alumno("46766548", "Dario Turchi", "dario@email.com", "1145632457", "1986-11-21");
$alumno2->setFichaMedica(73, 168, false);
$alumno2->presentismo = 68;

$alumno3 = new Alumno("39765454", "Gacundo Fagnano", "facundo@email.com", "1145632457", "1993-02-06");
$alumno3->setFichaMedica(90, 187, true);
$alumno3->presentismo = 88;

$alumno4 = new Alumno("41687536", "Gaston Aguilar", "gaston@email.com", "1145632457", "1999-11-02");
$alumno4->setFichaMedica(70, 169, false);
$alumno4->presentismo = 98;

$clase1 = new clase();
$clase1->nombre = "funcional";
$clase1->asignarEntrenador($entrenador1);
$clase1->inscribirAlumno($alumno1);
$clase1->inscribirAlumno($alumno3);
$clase1->inscribirAlumno($alumno4);
$clase1->imprimirListado();

$clase2 = new clase();
$clase2->nombre = "zumba";
$clase2->asignarEntrenador($entrenador2);
$clase2->inscribirAlumno($alumno1);
$clase2->inscribirAlumno($alumno2);
$clase2->inscribirAlumno($alumno3);
$clase2->imprimirListado();
print_r($clase1);
