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

    const VISA = "VISA";
    const AMEX = "American Express";
    const MASTERCARD = "Mastercard";
    const NARANJA = "Naranja";
    const CABAL = "CABAL";

    public function __construct($tipo, $numero, $fechaVto, $cvv)
    {
        $this->numero = $numero;
        $this->fechaVto = $fechaVto;
        $this->tipo = $tipo;
        $this->cvv = $cvv;
    }

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

    public function  agregarTarjeta($tarjeta)
    {
        $this->aTarjetas[] = $tarjeta;
    }

    public function darDeBaja($fecha)
    {
        $this->fechaBaja = $fecha;
        $this->bActivo = false; //Baja Logica.
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
$cliente1->darDeBaja("05/09/2022");
$tarjeta1 = new Tarjeta(Tarjeta::VISA, "4223750778806383", "03/2022", "01/2023", "275");
$tarjeta2 = new Tarjeta(Tarjeta::AMEX, "347572886751981", "05/2020", "07/2027", "136");
$tarjeta3 = new Tarjeta(Tarjeta::MASTERCARD, "5415620495970009", "06/2021", "12/2024", "742");
$cliente1->agregarTarjeta($tarjeta1);
$cliente1->agregarTarjeta($tarjeta2);
$cliente1->agregarTarjeta($tarjeta3);


$cliente2 = new Cliente();
$cliente2->dni = "48456876";
$cliente2->nombre = "Bernabe Paz";
$cliente2->correo = "bernabe@correo.com";
$cliente2->celular = "1145326787";
$cliente2->agregarTarjeta(new Tarjeta(Tarjeta::VISA, "4969508071710316", "08/2025", "865"));
$cliente2->agregarTarjeta(new Tarjeta(Tarjeta::MASTERCARD, "5149107669552238", "04/2025", "554"));
$cliente2->darDeBaja("05/09/2022");


print_r($cliente1);
print_r($cliente2);
