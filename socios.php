<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Tarjeta
{
    private $nombreTitular;
    private $numero;
    private $fechaEmision;
    private $fechaVto;
    private $tipo;
    private $cvv;

    const VISA = "visa";
    const AMEX = "amex";
    const MASTERCARD = "mastercard";

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}


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

class Cliente extends Persona
{
    private $aTarjetas;
    private $bActivo;
    private $fechaAlta;
    private $fechaBaja;

    public function __construct()
    {
        $this->aTarjetas = array();
        $this->bActivo = true;
        $this->fechaAlta = date("d/m/Y H:i:s");
    }
    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function  agregarTarjeta()
    {
    }

    public function darDeBaja()
    {
    }

    public function  imprimir()
    {
    }
}

///Desarrollo del programa

$cliente1 = new Cliente();
$cliente1->dni = "35123789";
$cliente1->nombre = "Ana Valle";
$cliente1->correo = "ana@correo.com";
$cliente1->celular = "+54 3518053537";

$tarjeta1 = new Tarjeta(Tarjeta::VISA, "4223750778806383", "03/2022", "01/2023", "275");
$tarjeta2 = new Tarjeta(Tarjeta::AMEX, "347572886751981", "05/2020", "07/2027", "136");
$tarjeta3 = new Tarjeta(Tarjeta::MASTERCARD, "5415620495970009", "06/2021", "12/2024", "742");

$cliente1->agregarTarjeta($tarjeta1);
$cliente1->agregarTarjeta($tarjeta2);
$cliente1->agregarTarjeta($tarjeta3);
