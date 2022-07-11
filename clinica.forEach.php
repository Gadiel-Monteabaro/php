<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aPacientes = array();
$aPacientes[] = array(
    "dni" => 33765012,
    "paciente" => "Ana Acuña",
    "edad" => 45,
    "peso" => 81.5,
);
$aPacientes[] = array(
    "dni" => 23684385,
    "paciente" => "Gonzalo Bustamante",
    "edad" => 66,
    "peso" => 79,
);
$aPacientes[] = array(
    "dni" => 23684385,
    "paciente" => "Juan Irraola",
    "edad" => 28,
    "peso" => 79,
);
$aPacientes[] = array(
    "dni" => 23684385,
    "paciente" => "Beatriz Ocampo",
    "edad" => 50,
    "peso" => 79,
);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Pacientes</title>
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
                                <th>Edad</th>
                                <th>Peso</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php
                            foreach ($aPacientes as $paciente) { ?>
                                <tr class="fil-datos">
                                    <td><?php echo $paciente["dni"]; ?></td>
                                    <td><?php echo $paciente["paciente"]; ?></td>
                                    <td><?php echo $paciente["edad"]; ?></td>
                                    <td><?php echo $paciente["peso"]; ?></td>
                                </tr>
                            <?php
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>