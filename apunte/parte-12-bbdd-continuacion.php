<?php
/*
Funciones de Agregacion
Estas funciones nos permiten resolver ciertas preguntas como por ejemplo
¿Cuantos clientes tengo?
¿Cuantos productos tengo de tipo jardineria?
¿Cual es el importe de las ventas promedio?
¿Cual es la cantidad minima de stock de productos?
¿Cual fue la facturacion del año 2020?

Las funciones que nos van a permitir resolver esta cuestiones son;
COUNT() // CANTIDAD
MIN() // MINIMO 
MAX() // MAXIMO
SUM() // SUMAR
AVG() // PROMEDIO
*/
/*
COUNT ejemplos

SELECT COUNT(*) FROM productos;
SELECT COUNT(idproducto) FROM productos;
SELECT COUNT(idproducto) AS cantidad  FROM productos WHERE fk_idtipoproducto = 1;
*/

/*
mas FUNCIONES

SELECT CONCAT("Esto es ", "Un tutorial") AS cadena;

SELECT CONCAT(nombre, "" , apellido) AS nomyape
FROM usuarios
WHERE apellido LIKE '%v%';

COALESCE -> Devuelve el primer valor no NULL
SELECT COALESCE (NULL, NULL, Gadiel, NULL,NULL); // Devuelve Gadiel.

DATEDIFF ->  Devuelve el numero de dias entre dos fechas. 
SELECT DATEDIFF("2017-06-25", "2017-06-15") AS cantidad; // Devuelve 10.

EXTRACE -> Extrae el mes de una fecha.
SELECT EXTRACT(MONTH FROM "2017-06-15 14:23:59");

REPLACE -> Reemplaza una palabra por otra.
SELECT REPLACE("Curso de SQL","SQL", "HMTL"); // En el primer string cambia SQL por HTML.

DATE FORMAT
SELECT DATE FORMAT(fecha, '%d/%m/%Y') AS fecha,
total,
fk_idcliente,
fk_idproducto
FROM ventas

CASE -> Permite generar casos, funciona como un condicional
SELECT 
idproducto,
nombre,
cantidad,
CASE
  WHEN cantidad = 0 THEN 'Sin Stock'
  ELSE 'sin especificar'
  END AS stock
FROM productos
ORDER BY nombre ASC  

DISTINC -> Obtener clientes no repetidos de una misma tabla.
SELECT DISTINC 
CONCAT(B.nombre, 'CUIT:', B.cuit) AS cliente
FROM ventas A
INNER JOIN clientes B ON A.fk_idcliente = B.idcliente

GROUP BY -> Sirve para agrupar duplicados
SELECT marca 
FROM autos
GROUP BY marca

EXIST
SELECT columna1
FROM tabla1
WHERE
EXIST (SELECT * FROM tabla2) // esto es uuna subquery

*/
