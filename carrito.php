<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Cliente
{
    protected $dni;
    protected $nombre;
    protected $correo;
    protected $telefono;
    protected $descuento;

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __construct()
    {
        $this->descuento = 0;
    }

    public function imprimir()
    {
    }
}

class Producto
{
    protected $cod;
    protected $nombre;
    protected $descripcion;
    protected $iva;
    protected $precio;

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __construct()
    {
        $this->iva = 0;
        $this->precio = 0;
    }

    public function imprimir()
    {
    }
}

class Carrito extends Cliente
{
    protected $aProductos =  array();
    protected $subtotal;
    protected $total;
    public function __construct()
    {
        $this->subtotal = 0;
        $this->total = 0;
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function cargarProducto()
    {
    }

    public function imprimirTicket()
    {
    }
}
