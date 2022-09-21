<?php

include_once "config.php";
include_once "entidades/venta.php";
include_once "entidades/cliente.php";
include_once "entidades/producto.php";

$venta = new Venta();
$venta->cargarFormulario($_REQUEST);

if ($_POST) {
    if (isset($_POST["btnGuardar"])) {
        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            //Actualizo un cliente existente
            $venta->actualizar();
        } else {
            //Es nuevo
            $producto = new Producto();
            $producto->idproducto = $venta->fk_idproducto;
            $producto->obtenerPorId();
            if ($venta->cantidad <= $producto->cantidad) {
                $total = $venta->cantidad * $producto->precio;
                $venta->total = $total;
                $venta->insertar();

                $producto->cantidad -= $venta->cantidad;
                $producto->actualizar();
            } else {
                $msg = "No hay stock suficiente";
            }
        }
    } else if (isset($_POST["btnBorrar"])) {
        $venta->eliminar();
        header("Location: venta-listado.php");
    }
}

if (isset($_GET["do"]) && $_GET["do"] == "buscarProducto") {
    $aResultado = array();
    $idProducto = $_GET["id"];
    $producto = new Producto();
    $producto->idproducto = $idProducto;
    $producto->obtenerPorId();
    $aResultado["precio"] = $producto->precio;
    $aResultado["cantidad"] = $producto->cantidad;
    echo json_encode($aResultado);
    exit;
}

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $venta->obtenerPorId();
}

$cliente = new Cliente();
$aClientes = $cliente->obtenerTodos();

$producto = new Producto();
$aProductos = $producto->obtenerTodos();

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

        <div class="col-12 form-control">
            <?php if (isset($msg) && !$msg = "") : ?> {
                <div class="alert alert-danger" role="alert">
                    <?php echo $msg; ?>
                </div>
                } <?php endif; ?>
        </div>
        <div class="col-12 form-group">
            <label for="txtFechaNac" class="d-block">Fecha y hora:</label>
            <select class="form-control d-inline" name="txtDia" id="txtDia" style="width: 80px">
                <option selected="" disabled="">DD</option>
            </select>
            <select class="form-control d-inline" name="txtMes" id="txtMes" style="width: 80px">
                <option selected="" disabled="">MM</option>
            </select>
            <select class="form-control d-inline" name="txtAnio" id="txtAnio" style="width: 100px">
                <option selected="" disabled="">YYYY</option>
            </select>
            <input type="time" required="" class="form-control d-inline" style="width: 120px" name="txtHora" id="txtHora" value="00:00">
        </div>
    </div>

    <div class="row">
        <div class="col-6 form-group">
            <label for="lstCliente">Cliente:</label>
            <select name="lstCliente" id="lstCliente" class="form-control selectpicker" data-live-search="true" required>
                <option value="" disabled selected>Seleccionar</option>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="lstProducto">Producto:</label>
            <select name="lstProducto" id="lstProducto" class="form-control selectpicker" data-live-search="true" required>
                <option value="" disabled selected>Seleccionar</option>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecioUnitario">Precio Unitario:</label>
            <input type="text" class="form-control" name="txtPrecioUnitario" id="txtPrecioUnitario" value="" placeholder="$0" required>
        </div>
        <div class="col-6 form-group">
            <label for="txtCantidad">Cantidad:</label>
            <input type="text" class="form-control" name="txtCantidad" id="txtCantidad" value="" required>
        </div>
        <div class="col-6 form-group">
            <label for="txtTotal">Total:</label>
            <input type="text" class="form-control" name="txtTotal" id="txtTotal" value="" placeholder="0" required>
        </div>
    </div>

</div>

<script>


</script>

<?php include_once("footer.php"); ?>