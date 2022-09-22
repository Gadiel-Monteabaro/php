<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function promediar($array)
{
    $sumar = 0;
    foreach ($array as $numero) {
        $sumar += $numero;
    }

    $promedio = $sumar / count($array);

    return $promedio;
}

$aAlumnos = array();

$aAlumnos[] = array(
    "id" => 1,
    "nombre" => "Juan Perez",
    "notas" => array(9, 8),
);
$aAlumnos[] = array(
    "id" => 2,
    "nombre" => "Ana Valle",
    "notas" => array(4, 9),
);
$aAlumnos[] = array(
    "id" => 3,
    "nombre" => "Gonzalo Roldan",
    "notas" => array(7, 6),
);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actas</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Actas</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12 border">
                <table class="table table-hover">
                    <thead>
                        <tr class="fil-datos">
                            <th>ID</th>
                            <th>Alumno</th>
                            <th>Nota Nº1</th>
                            <th>Nota Nº2</th>
                            <th>Promedio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aAlumnos as $alumno) : ?>
                            <tr class="fil-datos">
                                <td><?php echo $alumno["id"]; ?></td>
                                <td><?php echo $alumno["nombre"]; ?></td>
                                <td><?php echo $alumno["notas"][0]; ?></td>
                                <td><?php echo $alumno["notas"][1]; ?></td>
                                <td><?php echo promediar($alumno["notas"]);  ?></td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>