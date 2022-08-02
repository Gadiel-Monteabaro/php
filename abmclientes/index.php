<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro de Clientes</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de Clientes</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="pb-4">
                        <label for="txtDni">DNI:*</label>
                        <input type="number" id="txtDni" name="txtDni" class="shadow form-control" required>
                    </div>
                    <div class="pb-4">
                        <label for="txtNombre">Nombre:*</label>
                        <input type="number" id="txtNombre" name="txtNombre" class="shadow form-control" required>
                    </div>
                    <div class="pb-4">
                        <label for="txtTelefono">Telefono:</label>
                        <input type="number" id="txtTelefono" name="txtTelefono" class="shadow form-control">
                    </div>
                    <div class="pb-4">
                        <label for="txtCorreo">Correo:*</label>
                        <input type="number" id="txtCorreo" name="txtCorreo" class="shadow form-control" required>
                    </div>
                    <div class="pb-4">
                        <label for="archivo">Archivo Adjunto:</label>
                        <input type="file" name="archivo" id="archivo" accept=".jpg, .jpeg, .png">
                        <small class="d-block">Archivos admitidos: .jpg, .jpeg, .png</small>
                    </div>
                    <div class="mt-3">
                        <button type="submit" name="btnGuardar" class="btn btn-primary px-3 shadow">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>