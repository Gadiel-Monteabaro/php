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
/*
Sentencias SQL 

SELECT - Sintaxis -> SELECT columna1, columna2, columna4 FROM 'nombreTabla';
SELECT - Ejemplo -> SELECT cuit, nombre, correo FROM clientes;
SELECT - ALL -> SELECT * FROM clientes;    //El '*', funciona como comodin.
SELECT - WHERE -> SELECT columna1, columna2... FROM 'nombreTabla' WHERE condicion1 AND condicion2...;
SELECT - WHERE - Ejemplo -> SELECT cuit, nombre, correo FROM clientes WHERW localidad = 'CABA' AND sexo = 'F';





Ejemplo -> SELECT * FROM clientes WHERE nombre LIKE 'A%'; // Todos los nombre que comienze con 'A' seran solicitados.
Ejemplo -> SELECT * FROM clientes WHERE nombre LIKE 'A%' ORDER BY nombre ASC; // ASC, significa 'ascendente' y DESC 'descendente'
Ejemplo -> SELECT * FROM clientes WHERE nombre LIKE 'A%' LIMIT 0,3;

Actividad
1- Obtener todos los productos con stock critico
-> SELECT * FROM productos WHERE cantidad<=10;

2- Obtener el nombre y correo de todos los clientes que cumplan en Marzo (Julio), ordenado de manera ascendente.
-> SELECT * FROM clientes WHERE MONTH(fecha_nac)= 07 ORDER BY nombre ASC;

Operaciones en la BBDD.
-Insert
-Select 
-Delete
-Update
*/
/*
ACID -> Un SGBD es transaccional cuando respeta el ACID.
-A -> Atomicidad, Se ejecuta todo o ninguna, transacciones completas
-C -> Consistencia, integridad, la BBDD parte de un estado valido y termina igual.
-I -> Isolated, Esto asegura que dos transacciones sobre la misma informacion sean totalmente independientes y no generen ningun tipo de error.
-D -> Durabilidad, Persistencia.

Transacciones - Sintaxis. 

Start transaction

Consulta1
Consulta2...

Commit;

Rollback;

Consultas Avanzadas
IS NULL -> Es nu lo
BETWEEN -> entre los valores 
IN -> lista de valores
LIKE -> se ajusta a otro valor -> LIKE '%Heladera%' // devolvera todos los valores que almenos contengan la palabra 'Nissan'
ORDER BY -> Ordenamos alfabeticamente
LIMIT -> asignamos un limite de busqueda
NOT -> Junto con sus variaciones
AND -> ('y')
OR -> ('o')
*/
