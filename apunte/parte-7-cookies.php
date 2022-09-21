<?php
/* 
Cookies => es informacion que envia el servidor web al cliente,
Con informacion que queda guardada en la pc de cada usuario  
El browser almacena esta informacion en texto plano de no mas de 2kb.


// ¿Para que utilizamos Cookies?

utilizamos cookies propias y de terceros para elaborar informacion estadistica y para mostrarle publicidad, contenidos y servicios personalizados en base a la informacioon de tu navegacion. 
Por otra parte se comparte los analisis de navegacion y los grupos de interes inferidos con las empresas colaboradoras con el fin de personalizar la publicidad.


$_COOKIE => Es una variable global que solo es de lectura
-la misma es una array asociativo que contendra informacion que se haya guardado previamente
-Cada posicion contendra la informacion de una cookie, donde la "clave" de la posicion sera el nombre de la cookie.

// Lectura de una Cookie
*/
echo '¡Hola ' . $_COOKIE["usuario"] . '!'; // => ¡Hola Gadiel!
// Asumiendo que la cookie "usuario" fue definida anteriormente.
/*
setcookie() => Define una cookie para ser enviada junto  con el resto de la cabeceras de HTTP, almacenando en el disco duro del usuario.
asi de esta manera asignamos y de la otra manera accedemos.
*/
setcookie("usuario", "juanita"); // nombre de la cookie y el valor.
/*
Tiempo de Expiracion
Es la fecha en la que expira la cookie, se expresa en segundos y en formato UNIX.
*/
$expira = time() + 3600; // 1 Hora. con la funcion time() seteamos el horario del usuario.
setcookie("usuario", "juanita", $expira); // De esta manera seteamos el tiempo de expiracion de las cookies.
/*
¿Como preguntar si la cookie esta seteada?
*/
if (isset($_COOKIE["usuario"])) {
    echo "Bienvenid@ " . $_COOKIE["usuario"];
} else {
    echo "Bienvenid@ Invitad@";
}
