<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();
$aEmpleados[] = array(
    "dni" => 33300123,
    "nombre" => "David García",
    "sueldo" => 70550.25,
);
$aEmpleados[] = array(
    "dni" => 40874456,
    "nombre" => "Ana del Valle",
    "sueldo" => 74700.00,
);
$aEmpleados[] = array(
    "dni" => 67567565,
    "nombre" => "Andrés Perez",
    "sueldo" => 83000.00,
);
$aEmpleados[] = array(
    "dni" => 75744545,
    "nombre" => "Victoria Luz",
    "sueldo" => 58100.00,
);


function calcularNeto($bruto)
{
    $neto = $bruto - ($bruto * 0.17);
    return $neto;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Empleados.</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 py-5 text-center">
                    <h1>Listado de Pacientes.</h1>
                    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 border text-center">
                    <table class="table table-hover">
                        <thead>
                            <tr class="fil-datos">
                                <th>DNI</th>
                                <th>Nombre y Apellido</th>
                                <th>Sueldo Neto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($aEmpleados as $empleado) { ?>
                                <tr class="fil-datos">
                                    <td><?php echo $empleado["dni"]; ?></td>
                                    <td><?php echo mb_strtoupper($empleado["nombre"]); ?></td>
                                    <td><?php echo "$" . number_format(calcularNeto($empleado["sueldo"]), 2, ",", "."); ?></td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Cantidad de Empleados Activos: <?php echo count($aEmpleados);  ?></p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>