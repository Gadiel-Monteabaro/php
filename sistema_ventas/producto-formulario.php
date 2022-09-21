<?php

include_once("config.php");
include_once("./entidades/producto.php");
include_once("./entidades/tipoproducto.php");

$producto = new Producto();

if ($_POST) {
    if (isset($_POST["btnGuardar"])) {
        $producto->cargarFormulario($_REQUEST);
        if (isset($_GET["id"]) && $_GET["id"] > 0) {
            $producto->actualizar();
            $msg["texto"] = "Actualizado Correctamente.";
            $msg["codigo"] = "alert-info";
        } else {

            $nombreAleatorio = date("Ymdhmsi"); //2021010420453710
            $archivo_tmp = $_FILES["archivo"]["tmp_name"];
            $extension = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);
            $nombreImagen = "$nombreAleatorio.$extension";

            if ($extension == "jpg" || $extension == "jpeg" || $extension == "png") {
                move_uploaded_file($archivo_tmp, "img/$nombreImagen");
            }

            $producto->imagen = $nombreImagen;
            $producto->insertar();
            $msg["texto"] = "Insertado Correctamente.";
            $msg["codigo"] = "alert-success";
        }
    }

    if (isset($_POST["btnBorrar"])) {
        $producto->cargarFormulario($_REQUEST);
        $producto->eliminar();
        header("Location: producto-formulario.php");
    }
}

if (isset($_GET["id"]) && $_GET["id"] > 0) {
    $producto->cargarFormulario($_REQUEST);
    $producto->obtenerPorId();
}


include_once("header.php");

$tipoProducto = new TipoProducto();
$aTipoProductos = $tipoProducto->obtenerTodos();


?>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Productos</h1>
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
            <a href="producto-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="producto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-6 form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="text" required="" class="form-control" name="txtNombre" id="txtNombre" value="<?php echo $producto->nombre; ?>">
        </div>
        <div class="col-6 form-group">
            <label for="txtNombre">Tipo de producto:</label>
            <select name="lstTipoProducto" id="lstTipoProducto" class="form-control" data-live-search="true">
                <option value="" disabled selected>Seleccionar</option>
                <?php foreach ($aTipoProductos as $tipoProducto) : ?>
                    <?php if ($producto->fk_idtipoproducto == $tipoProducto->idtipoproducto) : ?>
                        <option selected value="<?php echo $tipoProducto->idtipoproducto; ?>"><?php echo $tipoProducto->nombre; ?></option>
                    <?php else : ?>
                        <option value="<?php echo $tipoProducto->idtipoproducto; ?>"><?php echo $tipoProducto->nombre; ?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="txtCantidad">Cantidad:</label>
            <input type="text" required="" class="form-control" name="txtCantidad" id="txtCantidad" value="<?php echo $producto->cantidad; ?>">
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecio">Precio:</label>
            <input type="text" required="" class="form-control" name="txtPrecio" id="txtPrecio" value="<?php echo $producto->precio > 0 ? number_format($producto->precio, 2, ",", ".") : ""; ?>">
        </div>
        <div class="col-12 form-group">
            <label for="txtNombre">Descripción:</label>
            <textarea id="editor" type="text" name="txtDescripcion" id="txtDescripcion"><?php echo $producto->descripcion; ?></textarea>
        </div>
        <div class="col-6 form-group">
            <label for="fileImagen">Imagen:</label>
            <input type="file" class="form-control-file" name="archivo" id="imagen">
            <img src="img/" class="img-thumbnail">
        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>

<?php include_once "footer.php"; ?>