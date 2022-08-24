<?php
/*
$_SESSION => Una session es una forma de guardar una informacion en un espacio de la memoria.
ubicado del lado del servidor.
PHP, nos brinda esta variable globla $_SESSION, donde sus valores son unicos para cada usuario en particular.
Los valores guardados en $_SESSION, persisten a traves de distintos pedios. inclusive en distintos sitios.

//Inicializar la session.
*/
session_start(); // lo pirmero que debemos hacer es inicializar la session.
/*
Luego de iniciar la session $_SESSION se puede escribir o modificar variables de session utilizando.
*/
$_SESSION["usuario"] = "admin";
/*
Acceder a datos
*/
echo "¡Hola " . $_SESSION["usuario"] . "!"; // =>  ¡Hola admin!
/*
Destruir Session
*/
unset($_SESSION["usuario"]); // elimina una variable de session.
session_destroy(); // elimina todas las variables de session.
