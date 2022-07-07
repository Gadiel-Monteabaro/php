<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aProductos = array();
$aProductos[] = array(
    "nombre" => "Smart TV 55\" 4k UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000,
);
$aProductos[] = array(
    "nombre" => "Samsung Galaxy A30 Blanco",
    "marca" => "Samsung",
    "modelo" => "Galaxy A30",
    "stock" => 0,
    "precio" => 22000,
);
$aProductos[] = array(
    "nombre" => "Aire Acondicionado Split Inverter Frio/Calor Surrey 2900F",
    "marca" => "Surrey",
    "modelo" => "553AIQ20QE",
    "stock" => 6,
    "precio" => 45000,
);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Productos</title>
</head>

<body>
    <main class="container">
        <div class="container">
            <div class="row">
                <div class="col-12 py-5 text-center">
                    <h1>Listado de Productos</h1>

                    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 border text-center">
                        <table class="table table-hover">
                            <thead>
                                <tr class="fil-datos">
                                    <th>Nombre</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Stock</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="fil-datos">
                                    <td><?php echo $aProductos[0]["nombre"]; ?></td>
                                    <td><?php echo $aProductos[0]["marca"]; ?></td>
                                    <td><?php echo $aProductos[0]["modelo"]; ?></td>
                                    <td><?php echo $aProductos[0]["stock"] > 10 ? "Hay Stock" : ($aProductos[0]["stock"] > 0 && $aProductos[0]["stock"] <= 10?"Poco Stock": "No hay Stock"); ?></td>
                                    <td><?php echo $aProductos[0]["precio"]; ?></td>
                                </tr>
                                <tr class="fil-datos">
                                    <td><?php echo $aProductos[1]["nombre"]; ?></td>
                                    <td><?php echo $aProductos[1]["marca"]; ?></td>
                                    <td><?php echo $aProductos[1]["modelo"]; ?></td>
                                    <td><?php echo $aProductos[1]["stock"] > 10 ? "Hay Stock" : ($aProductos[1]["stock"] > 0 && $aProductos[1]["stock"] <= 10?"Poco Stock": "No hay Stock"); ?></td>
                                    <td><?php echo $aProductos[1]["precio"]; ?></td>
                                </tr>
                                <tr class="fil-datos">
                                    <td><?php echo $aProductos[2]["nombre"]; ?></td>
                                    <td><?php echo $aProductos[2]["marca"]; ?></td>
                                    <td><?php echo $aProductos[2]["modelo"]; ?></td>
                                    <td><?php echo $aProductos[2]["stock"] > 10 ? "Hay Stock" : ($aProductos[2]["stock"] > 0 && $aProductos[2]["stock"] <= 10?"Poco Stock": "No hay Stock"); ?></td>
                                    <td><?php echo $aProductos[2]["precio"]; ?></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </main>
</body>

</html>