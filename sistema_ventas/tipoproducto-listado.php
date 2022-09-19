<?php
include_once("config.php");
include_once("./entidades/tipoproducto.php");

$tipoProducto = new TipoProducto;
$aTipoProducto = $tipoProducto->obtenerTodos();

include_once("header.php");

?>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Listado de Tipo Producto</h1>

    <div class="row">
        <div class="col-12 mb-3">
            <a href="./tipoproducto-formulario.php" class="btn btn-primary">Nuevo</a>
        </div>
    </div>

    <table class="col-12 table table-hover border">
        <tr>
            <th>Nombre</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($aTipoProducto as $tipoProducto) : ?>
            <tr>
                <td><?php echo $tipoProducto->nombre; ?></td>
                <td><a class="btn btn-info" href="./tipoproducto-formulario.php?id=<?php echo $tipoProducto->idtipoproducto; ?>">Editar</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>