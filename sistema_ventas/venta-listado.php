<?php
include_once "config.php";
include_once "entidades/venta.php";



include_once "header.php";
?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Listado de Ventas</h1>

    <div class="row">
        <div class="col-12 mb-3">
            <a href="./producto-formulario.php" class="btn btn-primary">Nuevo</a>
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
    </table>

</div>