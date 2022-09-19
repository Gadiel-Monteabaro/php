<?php

include_once("config.php");
include_once("./entidades/producto.php");
include_once("header.php");

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
            <a href="tipoproducto-listado.php" class="btn btn-primary mr-2">Listado</a>
            <a href="tipoproducto-formulario.php" class="btn btn-primary mr-2">Nuevo</a>
            <button type="submit" class="btn btn-success mr-2" id="btnGuardar" name="btnGuardar">Guardar</button>
            <button type="submit" class="btn btn-danger" id="btnBorrar" name="btnBorrar">Borrar</button>
        </div>
    </div>
    <div class="row">
        <div class="col-6 form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="text" required="" class="form-control" name="txtNombre" id="txtNombre" value="">
        </div>
        <div class="col-6 form-group">
            <label for="lstTipoProducto">Tipo de producto:</label>
            <select name="lstTipoProducto" id="lstTipoProducto" class="form-control" data-live-search="true" required>
                <option value="" disabled selected>Seleccionar</option>
            </select>
        </div>
        <div class="col-6 form-group">
            <label for="txtCantidad">Cantidad:</label>
            <input type="text" required="" class="form-control" name="txtCantidad" id="txtCantidad" value="">
        </div>
        <div class="col-6 form-group">
            <label for="txtPrecio">Precio:</label>
            <input type="text" required="" class="form-control" name="txtPrecio" id="txtPrecio" value="">
        </div>
        <div class="col-12 form-group">
            <label for="txtCorreo">Descripción:</label>
            <textarea id="editor" type="text" name="txtDescripcion" id="txtDescripcion"></textarea>
        </div>
        <div class="col-6 form-group">
            <label for="fileImagen">Imagen:</label>
            <input type="file" class="form-control-file" name="archivo" id="imagen">
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