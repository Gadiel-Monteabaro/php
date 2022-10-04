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
IN -> lista de valores -> WHERE color IN ('red', 'blue' , 'yellow');
LIKE -> se ajusta a otro valor -> LIKE '%Heladera%'; // devolvera todos los valores que almenos contengan la palabra 'Nissan'
ORDER BY -> Ordenamos alfabeticamente
LIMIT -> asignamos un limite de busqueda
NOT -> Junto con sus variaciones
AND -> ('y')
OR -> ('o')
*/
/*
Diagrama Entidad Relacion (DER)
Herramienta para el modelado de datos que permite representar la entidades relevantes de un sistema de informacion asi como sus interrelaciones y propiedades.
-Entidad (Tablas) -> Representa una "cosa" del mundo real. Se representa como un rectangulo. (Persona, Animal, Materia, Casa, Pelicula)
-Atributos (Columnas) -> Propiedades de esa "cosa" (id, nombre, edad, tamaño, precio, titulo, estado)
-Claves (id)
-Relaciones
*/

//Sentencias SQL (DML)
/*
SELECT -> Nos permite obtener informacion almacenadas en las tablas de una base de datos.

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
*/
/*
INSERT -> Añade datos a una tabla de base de datos.

INSERT - Sintaxis -> INSERT INTO nombre_de_tabla(campo1,campo2,campo3)
                     VALUES (valor_campo_1,valor_campo_2,valor_campo_3);
*/
/*
UPDATE -> Actualiza datos de una tabla de base de datos.

UPDATE - Sintaxis -> UPDATE nombre_de_tabla
                       SET 
                       campo_1 = nuevo_valor_1
                       WHERE condicion1;
*/
/*
DELETE -> Elimina datos de una tabla de base de datos.

DELETE - Sintaxis -> DELETE FROM nombre_de_tabla 
                      WHERE condicion1;
*/
/*
Tipos de Datos.
INT -> -2,147,483,648 a 2,147,483,647 (Si los negativos no estan definidos el valor positivo se duplica; 0 a 4,294,967,295)
TINYINT -> -218 a 217 (Si los negativos no estan definidos el valor positivo se duplica; 0 a 255)
CHAR -> siempre va a ocupar en la memoria, 100 caracteres.-
VARCHAR -> va a tener un maximo de 100 caracteres.
TEXT -> texto libre
ENUM -> ('mal','regular','bien','muy bien','sobresaliente') dato elegido por nosotros.

Primary key, es una UNIQUE KEY 
Una PK es una campo que identifica a cada fila de una tabla de forma unica.
No puede haber  dos filas en una tabla que tengan la misma clave primaria.
No es obligatorio , pero es Recomendable que cada tabla tenga su PK.

Unique key, es una restriccion que solo permite valores unicos para uno o multiples campos.
Ejemplos 
DNI
ISBN (libros)
Numero de Avion + FechaHora

DEFAULT -> Se asgina dicho valor cuando no se especifica ninguno en el INSERT 
NULL -> es una caso particular del valor DEFAULT, significa que el valor no existe o se desconoce ese dato, no significa que este vacio , ni tampoco que su valor es cero (0).
*/

/*
Ejemplo complejo
SELECT A.idventa, A.fecha, A.cantidad, A.preciounitario, A.total, A.fk_idcliente, B.nombre
 FROM ventas A
 INNER JOIN clientes B ON A.fk_idcliente = B.idcliente

*/

/*
Creacion de Tablas
Sintaxys
CREATE TABLE nombre_tabla (
    columna1 tipo_dato
    columna2 tipo_dato
)

ejemplo 
CREATE TABLE peliculas (
    id INT UNSIGNED PRIMARY KEY AUTO_INVREMENT,
    titulo VARCHAR(200) NOT NULL
);

Eliminacion de Tablas
Sintaxys 
DROP TABLE peliculas

Actualizar una tabla y Modificar datos de una tabla
ejemplo 
ALTER TABLE peliculas 
ADD rating DECIMAL(3,1) UNSIGNED NOT NULL;

ALTER TABLE peliculas 
MODIFY rating DECIMAL(4,2) UNSIGNED NOT NULL;

o eliminar 

ALTER TABLE peliculas 
DROP rating; 
*/