<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Cliente
{
    private $dni;
    private $nombre;
    private $correo;
    private $telefono;
    private $descuento;

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
    private $cod;
    private $nombre;
    private $descripcion;
    private $iva;
    private $precio;

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

class Carrito
{
    private $cliente;
    private $aProductos;
    private $subtotal;
    private $total;
    public function __construct()
    {
        $this->aProductos = array();
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
