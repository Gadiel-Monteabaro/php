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
