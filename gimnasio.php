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

    public function asignarEntrenador()
    {
    }


    public function inscribirAlumno()
    {
    }

    public function imprimirListado()
    {
    }
}
