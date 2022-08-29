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
    //public function insertar(); // Puede tener funciones incorporadas, para establecesr funcionalidades asociadas.
}


