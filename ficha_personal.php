<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


date_default_timezone_set("America/Argentina/Buenos_Aires");
$nombre = "Gadiel";
$apellido = "Silva";
$edad = 25;
$aPeliculas = array("Volver al fututo", "El dia despues de mañana", "Titanic");

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="container">
            <div class="row">
                <div class="col-12 py-5 text-center">
                    <h1>Ficha Personal</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 border text-center">
                    <table class="table table-hover">
                        <tbody>
                            <tr class="fil-datos">
                                <th>Fecha</th>
                                <td><?php echo date("d/m/y"); ?></td>
                            </tr>
                            <tr class="fil-datos">
                                <th>Nombre y Apellido</th>
                                <td> <?php echo "$nombre $apellido"; ?></td>
                            </tr>
                            <tr class="fil-datos">
                                <th>Edad</th>
                                <td><?php echo $edad; ?></td>
                            </tr>
                            <tr class="fil-datos">
                                <th>Peliculas Favorita</th>
                                <td><?php echo ($aPeliculas[0]); ?><br>
                                    <?php echo ($aPeliculas[1]); ?><br>
                                    <?php echo ($aPeliculas[2]); ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>