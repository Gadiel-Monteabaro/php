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
    <title>Datos Personales</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 py-5 ">
                    <h1>Formulario</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form method="POST" action="./resultado.php">
                        <div class="pb-4">
                            <label for="txtNombre">Nombre:*</label>
                            <input type="text" name=txtNombre id=txtNombre class="shadow form-control">
                        </div>
                        <div class="pb-4">
                            <label for="txtDocumento">DNI:*</label>
                            <input type="number" name=txtDocumento id=txtDocumento class="shadow form-control">
                        </div>
                        <div class="pb-4">
                            <label for="txtTelefono">Teléfono:*</label>
                            <input type="number" name=txtTelefono id=txtTelefono class="shadow form-control">
                        </div>
                        <div class="pb-4">
                            <label for="txtEdad">Edad:*</label>
                            <input type="number" name=txtEdad id=txtEdad class="shadow form-control">
                        </div>
                        <div>
                            <button type="submit" name="enviar" class="btn btn-primary px-5">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>