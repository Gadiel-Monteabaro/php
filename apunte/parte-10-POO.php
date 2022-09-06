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
class Persona //El objet se crea con la primera letra en mayuscula.
{
    public $dni;
    public $nombre;
    public $correo;
    public $telefono;

    public function __construct()
    {
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

$docente1 = new Persona(); // De esta forma instanciamos la clase Persona.
$docente1->dni = "39622616"; // De esta forma le damos valores a las propiedades de la clase Persona.
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