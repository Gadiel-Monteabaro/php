<?php

include_once("config.php");
include_once("./entidades/venta.php");
include_once("header.php");

?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Usuario</h1>
    <?php if (isset($msg)) : ?>
        <div class="row">
            <div class="col-12">
                <div class="alert <?php echo $msg["codigo"]; ?>" role="alert">
                    <?php echo $msg["texto"]; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-12 mb-3">
            <a href="tipoproducto-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="tipoproducto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-6 form-group">
            <label for="txtFecha">Fecha y Hora:</label>
            <input type="date" required class="form-control" name="txtFecha" id="txtFecha" value="">
        </div>
    </div>
    <div class="row">
        <div class="col-6 form-group">
            <label for="lstCliente">Cliente:</label>
            <select name="lstCliente" id="lstCliente" class="form-control" data-live-search="true" required>
                <option value="" disabled selected>Seleccionar</option>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="lstProducto">Producto:</label>
            <select name="lstProducto" id="lstProducto" class="form-control" data-live-search="true" required>
                <option value="" disabled selected>Seleccionar</option>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecioUnitario">Precio Unitario:</label>
            <input type="text" class="form-control" name="txtPrecioUnitario" id="txtPrecioUnitario" value="" required>
        </div>
        <div class="col-6 form-group">
            <label for="txtCantidad">Cantidad:</label>
            <input type="text" class="form-control" name="txtCantidad" id="txtCantidad" value="" required>
        </div>
        <div class="col-6 form-group">
            <label for="txtTotal">Total:</label>
            <input type="text" class="form-control" name="txtTotal" id="txtTotal" value="" required>
        </div>

    </div>

</div>

<?php include_once("footer.php"); ?>