<?php
/*
Base de Datos. (BBDD)
-Conjunto de datos pertenecientes a un mismo contexto.
-Representan elementos de la realidad.
-Organizados para un proposito especifico.

Funcion de BBDD
-Almacenar, agregar, eliminar, modificar datos.
-Acceder a datos en el futuro.
-Manipular los datos.
-Analizar los datos.

MySQL/MariaDB
-Es un sistema de gestion de base de Datos (SGDB), con finalidad en las paginas, eficientes y forma parde del stack de XAMP.

Caracteristicas.
-Multiplataforma -> Funciona sobre sistemas Windows, Mac, Unix 
-Open Source -> Adaptable y gratuito.
-Relacional -> integridad referencial. 
-Velocidad -> rapidez en transacciones.
-Multiconexiones -> Seguridad, multi-hilos, multiples usuarios.
-Estandar Sql32 -> Tipos de datos, codificacion , json.

Softwares Graficos 
Heidi SQL (Windows)
Navicat (Windows, Mac, Linux)
Php MyAdmin (web)
Sequel Pro (Mac)
Workbench
*/
/*
SQL->Lenguaje de Consultas Estructurado, donde podemos manipular, estructurar, administrar y gestionar.
-DML-> Lenguaje de manipulacion de datos
-DDL-> Lenguaje de definicion de datos
*/
//Conectarnos a MySQL desde PHP 
$mySqli = new mysqli('127.0.0.1', 'root', 'tu_contraseña', 'nombre_BBDD');
if ($mySqli->connect_errno) {
    //La conexion fallo, que hacemos ?
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mySqli->connect_errno . "\n";
    exit;
}
