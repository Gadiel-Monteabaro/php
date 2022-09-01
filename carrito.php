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
        echo "Dni: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Correo: " . $this->correo . "<br>";
        echo "Telefono: " . $this->telefono . "<br>";
        echo "Descuento: " . $this->descuento . "<br><br>";
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
        $this->iva = 0.0;
        $this->precio = 0.0;
    }

    public function imprimir()
    {
        echo "Codigo: " . $this->cod . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Descripcion: " . $this->descripcion . "<br>";
        echo "Iva: " . $this->iva . "<br>";
        echo "Precio: " . $this->precio . "<br><br>";
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
        $this->subtotal = 0.0;
        $this->total = 0.0;
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function cargarProducto($producto)
    {
      return  $this->aProductos[] = $producto;
    }

    public function imprimirTicket()
    {
    }
}


//Programa
$cliente1 = new Cliente();
$cliente1->dni = "39622616";
$cliente1->nombre = "Gadiel Silva";
$cliente1->correo = "gadielsilva96@gmail.com";
$cliente1->telefono = "+54 3518053537";
$cliente1->descuento = 0.05;
//print_r($cliente1);
$cliente1->imprimir();

//Programa 2 
$producto1 = new Producto();
$producto1->cod = "AB8767";
$producto1->nombre = "Notebook 15\" HP";
$producto1->descripcion = "Esta es una computadora HP";
$producto1->precio = 30800;
$producto1->iva = 21;
$producto1->imprimir();

$producto2 = new Producto();
$producto2->cod = "QWR579";
$producto2->nombre = "Heladera whirlpool";
$producto2->descripcion = "Esta es una heladera no froze";
$producto2->precio = 76000;
$producto2->iva = 10.5;
$producto2->imprimir();

//Programa 3
$carrito = new carrito();
$carrito->cliente = $cliente1;;
$carrito->cargarProducto($producto1);
$carrito->cargarProducto($producto2);
$carrito->imprimirTicket();
print_r($carrito);
