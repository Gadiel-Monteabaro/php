<?php
include_once "config.php";
include_once "entidades/venta.php";
include_once "entidades/cliente.php";
include_once "entidades/producto.php";

$venta = new Venta;

if ($_POST) {
    if (isset($_POST["btnGuardar"])) {
        $venta->cargarFormulario($_REQUEST);
        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            $venta->actualizar();
            $msg["texto"] = "Actualizado Correctamente.";
            $msg["codigo"] = "alert-info";
        } else {
            $venta->insertar();
            $msg["texto"] = "Insertado Correctamente.";
            $msg["codigo"] = "alert-success";
        }
    }

    if (isset($_POST["btnBorrar"])) {
        $venta->cargarFormulario($_REQUEST);
        $venta->eliminar();
        header("Location: venta-listado.php");
    }
}

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $venta->cargarFormulario($_REQUEST);
    $venta->obtenerPorId();
}

$cliente = new Cliente();
$aClientes = $cliente->obtenerTodos();

$producto = new Producto();
$aProductos = $producto->obtenerTodos();

include_once "header.php";

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
            <a href="venta-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="venta-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>

    <div class="row">

        <div class="col-12 form-control">
            <?php if (isset($msg) && !$msg = "") : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $msg; ?>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-12 form-group">
            <label for="txtFechaNac" class="d-block">Fecha y hora:</label>
            <select class="form-control d-inline" name="txtDia" id="txtDia" style="width: 80px">
                <option selected="" disabled="">DD</option>
                <?php for ($i = 1; $i <= 31; $i++) : ?>
                    <?php if (date("d") == $i) : ?>
                        <option selected value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php else : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endif; ?>
                <?php endfor; ?>
            </select>
            <select class="form-control d-inline" name="txtMes" id="txtMes" style="width: 80px">
                <option selected="" disabled="">MM</option>
                <?php for ($i = 1; $i <= 12; $i++) : ?>
                    <?php if (date("m") == $i) : ?>
                        <option selected value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php else : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endif; ?>
                <?php endfor; ?>
            </select>
            <select class="form-control d-inline" name="txtAnio" id="txtAnio" style="width: 100px">
                <option selected="" disabled="">YYYY</option>
                <?php for ($i = 2020; $i <= date("Y"); $i++) : ?>
                    <?php if (date("Y") == $i) : ?>
                        <option selected value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php else : ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endif; ?>
                <?php endfor; ?>
            </select>
            <input type="time" required="" class="form-control d-inline" style="width: 120px" name="txtHora" id="txtHora" value="<?php echo date("H:i"); ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-6 form-group">
            <label for="lstCliente">Cliente:</label>
            <select name="lstCliente" id="lstCliente" class="form-control selectpicker" data-live-search="true" required>
                <option value="" disabled selected>Seleccionar</option>
                <?php foreach ($aClientes as $cliente) : ?>
                    <?php if ($cliente->idcliente == $venta->fk_idcliente) : ?>
                        <option selected value="<?php echo $cliente->idcliente; ?>"><?php echo $cliente->nombre; ?></option>
                    <?php else : ?>
                        <option value="<?php echo $cliente->idcliente; ?>"><?php echo $cliente->nombre; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="lstProducto">Producto:</label>
            <select name="lstProducto" id="lstProducto" class="form-control selectpicker" data-live-search="true" required>
                <option value="" disabled selected>Seleccionar</option>
                <?php foreach ($aProductos as $producto) : ?>
                    <?php if ($producto->idproducto == $venta->fk_idproducto) : ?>
                        <option selected value="<?php echo $producto->idproducto; ?>"><?php echo $producto->nombre; ?></option>
                    <?php else : ?>
                        <option value="<?php echo $producto->idproducto; ?>"><?php echo $producto->nombre; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecioUnitario">Precio Unitario:</label>
            <input type="text" class="form-control" name="txtPrecioUni" id="txtPrecioUni" value="<?php echo $venta->preciounitario ?>" required>
        </div>
        <div class="col-6 form-group">
            <label for="txtCantidad">Cantidad:</label>
            <input type="text" class="form-control" name="txtCantidad" id="txtCantidad" value="<?php echo $venta->cantidad ?>" required>
        </div>
        <div class="col-6 form-group">
            <label for="txtTotal">Total:</label>
            <input type="text" class="form-control" name="txtTotal" id="txtTotal" value="<?php echo $venta->total ?>" required>
        </div>
    </div>

</div>

<script>


</script>

<?php include_once("footer.php"); ?>