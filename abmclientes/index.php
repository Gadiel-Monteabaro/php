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
    <title>Registro de clientes</title>
    <link rel="stylesheet" href="./css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Registro de Clientes</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="pb-4">
                        <label for="txtDni">DNI:*</label>
                        <input type="text" name="txtDni" id="txtDni" class="shadow form-control" placeholder="Ingrese el nombre y apellido" required>
                    </div>
                    <div class="pb-4">
                        <label for="txtNombre">Nombre:*</label>
                        <input type="number" name="txtNombre" id="txtNombre" class="shadow form-control" required>
                    </div>
                    <div class="pb-4">
                        <label for="txtTelefono">Telefono:</label>
                        <input type="number" name="txtTelefono" id="txtTelefono" class="shadow form-control">
                    </div>
                    <div class="pb-4">
                        <label for="txtCorreo">Correo:*</label>
                        <input type="number" name="txtCorreo" id="txtCorreo" class="shadow form-control" required>
                    </div>
                    <div class="pb-2">
                        <label for="archivo">Archivo Adjunto:</label>
                        <input type="file" name="archivo" id="archivo" accept=".jpg,.jpeg,.png">
                        <small class="d-block">Archivos Admitidos: .jpg, .jpeg, .png</small>
                    </div>
                    <div class="mt-3">
                        <button type="submit" name="btnGuardar" class=" btn btn-primary px-3 shadow">Guardar</button>
                        <button type="submit" name="btnNuevo" class="btn btn-danger px-3 shadow">Nuevo</button>
                    </div>
                </form>
            </div>

            <div class="col-8">

                <table class="shadow table table-hover">
                    <thead>
                        <tr class="fil-datos">
                            <th>Imagen</th>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>


    </div>


</body>

</html>