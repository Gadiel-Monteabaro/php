<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva = 21;
$precioConIva = 0;
$precioSinIva = 0;
$ivaCantidad = 0;
if ($_POST) {

    $iva = $_POST["lstIva"];
    $precioSinIva = ($_POST["txtPrecioSinIva"]) > 0 ? $_POST["txtPrecioSinIva"] : 0;
    $precioConIva = ($_POST["txtPrecioConIva"]) > 0 ? $_POST["txtPrecioConIva"] : 0;


    //definicion 
    if ($precioSinIva > 0) {
        $precioConIva = $precioSinIva * ($iva / 100 + 1);
    }
    if ($precioConIva > 0) {
        $precioSinIva = $precioConIva / ($iva / 100 + 1);
    }

    $ivaCantidad = $precioConIva - $precioSinIva;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IVA</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Calculadora de IVA</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">
                <form method="POST" action="">
                    <div class="pb-4">
                        <label for="txtUsername">IVA:</label>
                        <select name="lstIva" id="lstIva">
                            <option name="21" value="21">21</option>
                            <option name="19" value="19">19</option>
                        </select>
                    </div>
                    <div class="pb-4">
                        <label for="txtPassword">Precio sin IVA:</label>
                        <input type="number" name=txtPrecioSinIva id=txtPrecioSinIva class="shadow form-control">
                    </div>
                    <div class="pb-4">
                        <label for="txtPassword">Precio con IVA:</label>
                        <input type="number" name=txtPrecioConIva id=txtPrecioConIva class="shadow form-control">
                    </div>
                    <div>
                        <button type="submit" name="enviar" class="btn btn-primary px-5 shadow">CALCULAR</button>
                    </div>
                </form>
            </div>

            <div class="col-6 text-left">
                <table class="table table-hover">
                    <tbody>
                        <tr class="fil-datos">
                            <th>IVA:</th>
                            <td><?php echo $iva . "%" ?></td>
                        </tr>
                        <tr class="fil-datos">
                            <th>Precio sin IVA</th>
                            <td> <?php echo ("$" .  number_format($precioSinIva, 0, ",", ".")); ?></td>
                        </tr>
                        <tr class="fil-datos">
                            <th>Precio con IVA</th>
                            <td> <?php echo "$" . number_format($precioConIva, 0, ",", "."); ?></td>
                        </tr>
                        <tr class="fil-datos">
                            <th>IVA cantidad</th>
                            <td> <?php echo "$" . number_format($ivaCantidad, 0, ",", "."); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</body>

</html>