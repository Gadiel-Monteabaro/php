<?php
/*
http => al contactar al servidor, el protocolo http envia y recibe informacion a traves de headers 

Status Codes
200 => ok
301 => moved permanently
307 => temporary redirect
403 => forbidden
404 => not found 
500 => internal server error
503 => service unavailable

https => este protocolo es la version segura de http (hyper text protocol) que todos utilizamos habitualmente. Basicamente, lo que ocurre es que el servidor web codifica la sesion con un certificado digital (SSL).
De este modo el ususario tiene garanmtia que su informacion no va a poder ser utilizada por terceros o ser interceptada.

Metodo GET => se utiliza para pedir informacion de un recurso especifico.

EL 'query string' se incluye en la URL conteniendo los datos a enviar.

La informacion solicitada se pide desde del formulario con la siguiente estructura.
*/
?>
<form method='GET'>
    <input type="text">....
</form>

<?php
/*
Metodo POST => envia informacion a ser procesada por un recurso especifico.

El 'query string' viaje en el cuerpo del mensaje a traves de HTTP y no esta visible en la URL.

Existen otros metodos, pero son menos comunes.
*/
?>
<form method='POST'>
    <input type="text">....
</form>

<?php
/*
Las variables superglobales son variables disponibles siempre, en todos los ambitos. No tenemos que declararlas y toman los valores de forma automatica.

$_GET (capturar datos de la query string) => Es una variable superglobal .Es un array asociativo que es generado a partir del query string de un pedido GET.
*/
$nombre = $_GET["txtNombre"]; // El txt es el 'name' de nuestro input.
/*
$_POST (capturar datos del formulario) =>  Es otra variable supergloba. Es un array asociativo que se genera a partir de lquery string de un pedido POST.
*/
$nombre = $_POST["txtNombre"]; // El txt es el 'name' de nuestro input.
/*
$_REQUEST (captura get y post a la vez)
*/
$nombre = $_REQUEST["txtNombre"]; // El txt es el 'name' de nuestro input.

/*
PostBack => nos permite procesar un pedido realizado por un usuario y absorber ese pedido en variables que podremos utilizar para alamacenar datos, que utilizaremos como informacion, donde tambien podremos operar con ellos.
*/
if ($_POST) { //El pedido puede ser POST, GET O REQUEST, recordar que hay otras formas pero estos son los mas utilizados.
    //procesa el pedido donde podemos guardar variables ;
    $nombre = $_POST["txtNombre"];
}

/*
isset => Determina si una variable está definida y no es null. 
*/
if (isset($_POST['txtUsuario'])) {
    $usuario =  $_POST['txtUsuario'];
} else {
    $usuario = 'invitado/a';
}

/*
Redirect => nos permite redireccionar a una pagina que nosotros asignemos como direccion.
*/
header('Location: https://google.com.ar');
