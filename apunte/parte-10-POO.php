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
}
