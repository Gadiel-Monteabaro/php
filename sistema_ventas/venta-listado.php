<?php
include_once "config.php";
include_once "entidades/venta.php";

$venta = new Venta;
$aVentas = $venta->obtenerTodos();

include_once "header.php";
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Listado de Ventas</h1>

    <div class="row">
        <div class="col-12 mb-3">
            <a href="./venta-formulario.php" class="btn btn-primary">Nuevo</a>
        </div>
    </div>


    <table class="table table-hover border">
        <tr>
            <th>Fecha</th>
            <th>Cantidad</th>
            <th>Producto</th>
            <th>Cliente</th>
            <th>Total</th>
            <th>Acciones</th>
        </tr>

        <?php foreach ($aVentas as $venta) : ?>
            <tr>
                <td><?php echo $venta->fecha; ?></td>
                <td><?php echo $venta->cantidad; ?></td>
                <td><?php echo $venta->producto; ?></td>
                <td><?php echo $venta->cliente; ?></td>
                <td><?php echo $venta->total; ?></td>
                <td><a class="btn btn-info" href="./tipoproducto-formulario.php?id=<?php echo $venta->idventa; ?>">Editar</a></td>
            </tr>
        <?php endforeach ?>
    </table>

</div>