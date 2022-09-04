<?php
/*
POO => Programacion orientada a objetos.

Es una manera de construir software basada en un nuevo paradigma. Programacion dominante desde 1980, influenciado por C++.
Propone resolver problemas de la realidad atraves de identificar objetos y relaciones de colaboracion entre ellos.
Donde el objeto y el mensaje son fundamentales.

Pensar en terminos de objetos, es muy parecido a la vida real.
Donde Buscaremos un objeto (auto), y lo trataremos como el elemento pricipal que tiene una serie de caracteristicas. En el caso del auto, 
Color, el modelo o la marca. Que ademas tiene una serie de funcionalidades asociadas como puede ser encender luces, marcha atras, acelerar, parar, etc.
En un esquema POO el coche seria el objeto, las propiedades serian las caracteristicas, y los metodos serian las funcionalidades asociadas.

Clases 
Una clase es un molde para la creacion de objetos.
Los Ojbetos son instancias de una clase.
Definen un conjunto de propiedades, estados, y comportamientos de dicha propiedadm, mediante sus metodos.
*/

//Clases => ejemplo de cliente
class Cliente //las clases se escriben comenzando en mayusculas.
{
    public $dni;
    public $nombre;
    public $correo;
    public $telefono;
    public function insertar()
    {
        echo "Hola";
    } // Puede tener funciones incorporadas, para establecesr funcionalidades asociadas.
}

//Mucho contenido esta en la parte N°11, del Apunte. Donde se ven ejercicios, junto con la catividades correspondientes dentro de todos los ejercicios.

/*
class Metodos
$this => el uso de $this dentro de un metodo hace referencia a la instancia puntual en donde sera ejecutada el metodo.
//En los ejercicios esta demostrado con mayor claridad.
new => iniciamos la intancia correspondiente a nuestro objeto.
*/
/*
Constructures por Defecto.
los constructores son funciones en una clase que son invocadas automaticamente cuando se crea una nueva instancia de una clase con el "new"
La definimos como. public function __construct();
*/
/* 
El operador "->" nos permite acceder a las poropiedades o metodos dentro del objeto. 
*/
/*
Constructor Parametrizado.
donde el constructor simplemente recibe un parametro, donde obtendra un valor de entrada.
*/
$obj1 = new Auto("", "", ""); //donde cada parametro respetara el orden de entrada correspondiente.
/*
Toda clase tiene de manera implicita dos metodos, el contructor y el destructor.

El contructor => Es llamado cuando la clase comienza a ocupar un lugar en la memoria, es decir, cuando comienza a ser utilizada, al ser instanciada, se encarga de inicializar variables, que luego si uno quiere puede modificar. tambien podemos llamar a otros contructores de otras clases.

El destructor => Es un metodo que se llama al finalizar la vida de la instancia de la clase, para liberar recursos.

public function __destruct (){
    echo "Destruyendo el objeto ". this->nombre ."<br>" ;
}
*/
/*
¿Que es un Objeto?
Es una instancia de una clase.
Un objeto posee: 
-Identidad => propiedad unica que lo caracteriza.
-Comportamiento => resuelve un conjunto de problemas atraves de sus funciones.
-Estado => Almacena informacion.
*/
/*
Constantes en una clase
*/
class docente
{
    const ESPECIALIDAD_WP = "Wordpress"; // una constante no recibe el simbolo "$" y van en mayusculas.
    const ESPECIALIDAD_ECO = "Economia Aplicada";
    const ESPECIALIDAD_BBDD = "Base de Datos";
}
/* 
En el ejercicio de docentes se ve aplicado esta funcionalidad.
Ejemplo de utilidad de constanetes "const" son apra ya nombrar numeros con prefijos, como puede ser los numeros de telefono de un pais.
*/
/*
Modificadores de propiedades y metodos.

public => hace que esa propiedad o entorno, sea accesible para cualquier entorno en PHP, desde fuera de la clase, es decir, en el programa, como en la clase misma.
private => Hace que esa propiedad sea solamente visible desde la clase que pertenece y no puede ser utilizada desde el programa.
protected => Hace que la porpiedad sea visible desde la clase que pertenece y sus clases hijas
*/
/*
Abstraccion => La abstraccion de datos nos permite nos preocuparnos de los elementos no importantes o esenciales.
Las estructuras de datos y tipos de datos son un tipo de abstraccion. Junto con los procedimientos y funciones.
*/
/*
Encapsulamiento (ocultamiento de la informacion) => Esta caracteristica es la que denota la capcidad del objeto de responder a peticiones a traves de sus metodos, sin la necesidad de exponer los medios utilizados para llegar a brindar estos metodos
¿Por que utilizar encapsulamiento?
Control
Cambio
La utilidad de utilizar encapsulamiento va por la facilidad de manejar la complejidad.
Donde las clases funcionan como cajas negras, donde solo se conoce el comportamiento, pero no sus detalles internos
*/
/*
Herencia (extends) => consiste en que una clase puede hederar sus variables y metodos a varias subclases(clases padre o superclase)
Lo cual una subclase aparte de los metodos y variables porpias, tambien hereda, las variables y metodos de la superclase o clase padre. Lo cual se crea una herencia de jerarquia.
*/
/*
Clases abastractas
la clases abstractas no se pueden instanciar.
Si heredamos de una clases abstracta todos sus metodos abstractos deberan ser definidos.
Si el metodo abstractoesta definido como protegido, la implementacion debe ser definidacomo protegida o publica pero nunca como privada.
*/
/*
parent => podemos utilizar el __construct de una clase padre sin necesidad de cargar los parametros nuevamente, simplemente utilizando el construc de la clase padre. // En el ejercicio de gimnasio, lo estuvimos utilizando.
*/
/*
instanceof => Es una funcion de PHP que nos permite preguntar si un objeto es de un tipo en particular,es decir, cual es su clase
*/
class Fruta
{
}
if ($manzana instanceof Fruta) { // manzana es una instancia de la clase Fruta?
    echo "La manzana es una fruta";
}
/*
Static => Declarar propiedades o metodos de clases como estaticos los hacen accesibles sin necesidad de instanciar la clase.
*/
class Calculadora
{
    public static function sumar($num1, $num2)
    {
        return $num1 + $num2;
    }
}

Calculadora::sumar(9, 8);
