<?php
/*
Programacion Orientada a OBbjetos -> Es una manera de construir software basada en un nuevo paradigma.
*/
/*
Clases -> 
-Una clase es un molde para la creacion de objetos.
-Los objetos son "instancias" de esa clase.
-Definen un conjunto de propiedades, estados y el comportamiento de dicha entidad, atraves de los metodos.
*/

use setasign\Fpdi\PdfParser\CrossReference\AbstractReader;

class Persona //El objet se crea con la primera letra en mayuscula.
{
    public $dni;
    public $nombre;
    public $correo;
    public $telefono;

    public function __construct($documento)
    {
        $this->dni = $documento;
    }

    public function imprimir()
    {
        // Las funciones en donde decidimos como se va a comportar el objeto, se les llama "Metodos".
    }
}
class Docente extends Persona
{
    public $salario;
    public $asignatura;

    public function __construct() //Con "construct", podemos darle valor predeterminado a la propiedad de una clase. Son convocadas automaticamente.
    {
        $this->salario = 10000; // Con el operador "->", accedemos a las propiedades de las clases
    }
    //Con extends las propiedades, estados y metodos de la clase Persona, tambien son utilizadas en la clase Docente.
}

$docente1 = new Persona("39622616"); // De esta forma instanciamos la clase Persona.
$docente1->nombre = "Gadiel Silva"; // De esta forma le damos valores a las propiedades de la clase Persona.
$docente1->imprimir(); //De esta forma llamamos a los metodos de la clase Persona.

/*
Constructor Parametrizado.
*/

class Cliente
{
    public $nombre;

    public function __construct($nombreCliente) // De esta forma creamos una contructor parametrizado.
    {
        $this->nombre = $nombreCliente;
    }

    public function __destruct() // De esta forma creamos un destructor.
    {
        echo "destruyendo objeto" . $this->nombre . "<br>";
    }
}

$cliente1 = new Cliente("Gadiel"); // instanciamos el constructor parametrizado, dandole el valor de "Gadiel" a la propiedad "nombre". 

/*
El constructor es llamado cuando la clase comienza a ocupar un lugar en la memoria, al ser instanciada. Se encarga de inicializar valores, incluso llamar contructores de otras clases.
*/
/*
Tenemos otra function implicita que la de destructor.
El destructor se llama cuando queremos finalizar la vida de la instancia de la clase, para liberar recursos.
*/

/*
Constantes en una clase.
*/
class Tarjetas
{
    const MASTERCARD = "Mastercard";
    const VISA = "VISA";
    const AMEX = "American Express";

    public function __get($name)     // Getters y Setters, PHP nos brinda estas funciones predeterminadas para obtener los valores de las propiedades y poder utilizarlas o cambiarlas, en cualquier momento.
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        return $this->$name = $value;
    }
}
/*
Modificadores -> Dentro de una clase los distintos atributos y metodos tienen distintos alcances.

-public -> hace es propiedad o metodo accesible desde cualquier punto de PHP, es decir, en el programa, como en la clase misma.
-private -> la propiedad o metodo solamente puede ser visible desde la clase en la que pertenece, y no desde el programa.
-protected -> hace que es propieda o metodo solo sea visible desde la clase en la que pertenece, y las clases hijas (extends).
*/
/* 
Pilares De POO.

Abstraccion 
La abstraccion de datos permite no preocuparse de los datos que no son esenciales.
Existe en casi todos los lenguajes de programacion. Las estructuras de datos, los tipos de datos, las funciones, los procedimientos son un ejemplo de abstraccion.
-ignorancia selectiva.
-decide que es lo importante y que no lo es. 
-utiliza la encapsulacion para reforzar la abstraccion.

Encapsulamiento (Ocultamiento de la informacion)
Es la que denota la capacidad de objeto a responder peticiones atreves de sus metodos sin la necesidad de exponer los medios utilizados para llegar a brindar estos resultados.
-Control
-Cambio
Va por la facilidad de manejar la complejidad, ya que las clases son como las cajas negras, solo se conoce el comportamiento pero no los detalles internos.
Solamente los metedos internos del objeto puede acceder a su estado.

Herencia (extends)  "Es un"
Consiste en que una clase (clase padre o superclase) puede hederar sus variables y sus metodos a varias subclases. lo cual significa que una sobclase, aparte de las propiedades y metodos propios tambien obtiene los valores y metodos de la clase padre o superclase. De esta manera se crea una jerarquia de herencia
*/
/* 
Clases Abstractas
-Las clases abstractas no se pueden instanciar.
-Todos los metodos abstractos deberan ser definidos.
-Si el metodo esta definido como protegido. la implementacion de la funcion debe ser definida como protegida o publica, nunca como privada.
*/
abstract class Fruta
{
    abstract public function comer();
}
// En algun punto deberia existir una restriccion en la implementacion de propiedades y funciones, para esto utilizamos las clases abstractas. 
/*
parent -> Al utilizar parenti estamos haciendo referencia al objeto padre de nuestra instancia, Esto permite llamar a metodos de esa clase para ejecutar su comportamiento.
*/
class Usuario extends Persona
{
    public function __construct($documento)
    {
        parent::__construct($documento); // utilizamos la funcion establecida en la clase Padre "Persona" 
    }
}
