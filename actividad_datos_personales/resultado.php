<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_POST) {
    $nombre = $_POST["txtNombre"];
    $documento = $_POST["txtDocumento"];
    $telefono = $_POST["txtTelefono"];
    $edad = $_POST["txtEdad"];
}


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Formulario</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-12 py-5 text-center">
                    <h1>Resultado de Formulario</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <thead class="border-botton">
                            <tr class="fil-datos">
                                <th>Nombre</th>
                                <th>Dni</th>
                                <th>Telefono</th>
                                <th>Edad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <?php echo $nombre; ?>
                                </td>
                                <td>
                                    <?php echo $documento; ?>
                                </td>
                                <td>
                                    <?php echo $telefono; ?>
                                </td>
                                <td>
                                    <?php echo $edad; ?>
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>