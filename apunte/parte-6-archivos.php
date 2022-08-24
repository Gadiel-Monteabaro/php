<?php
/*
PHP - Archivos
    PHP nos permite generar archivos, insertar, eliminar o actualizar datos.
    Para ello PHP, brinda una serie de funciones que nos permitira trabajar con los archivos generados.
 */

// fopen => Abre un archivo y devuelve un puntero al archivo.
//Syntaxis
$nameFile = "datos.txt";
$archivo1 = fopen($nameFile, $mode);
/*
Modos posibles
r => abre un archivo solo en modo lectura
r+ => abre un archivo para leer o escribir
w => solo permite escribir y no leer
w+ => permite leer o escribir un archivo, si no existe crea el archivo 
a => agrega al final
a+ => agrega al final, si no existe crea el archivo
*/
// CUIDADO => No es lo mismo abrir el archivo en modo 'r' que en 'a'

// fwrite => Escribe en el archivo
fwrite($archivo1, '1'); // Escribe en el archivo '1'

// fclese => Cierra el archivo
fclose($archivo1); // Cierra el archivo

// fread => Lectura de un archivo 
$tamanio = filesize($nameFile); // Me devuelve el tamaño del archivo en bytes.
$contenido = fread($archivo1, $tamanio); // Lee un archivo, hasta el tamaño especificado

//file_get_contents => Levanta un archivo en cadena de texto
$contenido = file_get_contents($nameFile); // Equivale a hacer un 'fopen', 'fread', 'fclose'

//file_put_contents => Esta funcion sobreescribe los datos del archivo.
$nombre = "Gadiel Silva";
file_put_contents($nameFile, $nombre);

/*
Un archivo de texto pouede ser demasiado grande, entonces lo que hacemos es leerlo linea por linea, ya que puede provocar de memoria.
*/
// la escritura seria:
$archivo = fopen($nameFile, 'r');
if ($archivo) {
    //leemos la linea
    while ($fila = fgets($archivo) == true) {
        echo $fila;
    }
}
fclose($archivo);

// file_exists => permite saber si un archivo existe o no.
file_exists($nameFile);

// is_array => Nos permite saber si el contenido de una variable es un array.
$aArray = array();

if (is_array($aArray)) {
    echo "Esto es un array.";
} else {
    echo "Esto no es un array, es otro tipo de dato.";
}

/*
Tamaño de archivos

Tamaño   =>   Expresado en Bytes
1KB      =>         1000
1MB      =>         1e+6
2MB      =>         2e+6
1GB      =>         1e+9
*/

/*
$_FILES => contendra toda la informacion de los archivos subidos dentro del metodo POST 
por cada archivo obtendra un array asociativo 
*/
$_FILES["archivo"]['error']; //indica si la imagen se subio correctamente
if ($FILES["archivo"]['error'] === UPLOAD_ERR_OK) { //UPLOAD_ERR_OK, detalla que no hubo errores
    // se adjunto correctamente 
}

$FILES["archivo"]['name'];  //  Indica el nombre del archivo que se subio
$extension = pathinfo($FILES["archivo"]['name'], PATHINFO_EXTENSION); // extension por la cual fue subido el archivo

$archivoTemporal = $FILES["archivo"]['tmp_name']; // Ubicacion real en el servido del archivo
move_uploaded_file($archivoTemporal, 'URL'); // move_uploaded_file guardamos el archivo

/*  !IMPORTANTE! informacion necesaria para el correcto funcionamiento de la pagina web
$nombreAleatorio = date(“Ymdhmsi”); //2021010420453710
$archivo_tmp = $_FILES["archivo"]["tmp_name"];
$extension = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);
if($extension == "doc" || $extension == "docx" || $extension == "pdf"){
move_uploaded_file($archivo_tmp, “files/$nombreAleatorio.$extension”);


unlink => elimina un archivo
*/

/*s
JSON => Es un formato de texto sencillo para el intercambio de datos
*/
$jsonPersona = json_encode($aPersonas);
$aPersonas = json_decode($jsonPersona, true);
unlink("nombreDelArchivo") // nombre del archivo que queremos eliminar
/*
Estructura de subida de archivos html

enctype => Especifica como deben codificarse los datos del formulario al enviarse al servidor

Valores que puede recibir => :  // Son tres las distintas formas de poder enviar esta especificacion
application/x-www-form-urlencoded
text/plain
multipart/form-data

*/

?>
<!--Esto es html, donde le permitimos al usuario subir imagenes o documentos importantes a nuestro sitioF
Formularios -->
<form action="" method="POST" enctype="multipart/form-data">
    Archivo adjunto:
    <input type="file" name="archivo" id="archivo" accept=".doc, .docx, .pdf" multiple> <!-- Si queremos subir varios archivos, utilizamos la propiedad multiple dentro de nuestro input  (UTILIZAR SOLO CUANDO QUEREMOS QUE EL USUARIO SUBA UNO O MAS ARCHIVOS!!!!!!!)-->
</form>

<?php
/*
MAX_FILE_SIZE => 
*/
?>
<form action="" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
    <input type="file" name="archivo" id="archivo" accept=".doc, .docx, .pdf" multiple>
</form>