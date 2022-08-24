<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//si existe el archivo invitados.txt lo abrimos y lo cargamos en una variable de tipo array
if (file_exists("invitados.txt")) {
    //los DNI permitidos.
    $archivo = fopen("invitados.txt", "r");
    $aDocumentos = fgetcsv($archivo, 0, ",");
} else {
    //sino el array queda vacio
    $aDocumentos = array();
}





?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Listado de invitados</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 py-5">
                <h1>Lista de Invitados</h1>
            </div>
            <div class="col-12">
                <h6>Complete el siguiente formulario:</h6>
            </div>
        </div>

        <div class="row">
            <div class="col-6 py-3">
                <form action="" method="POST">
                    <div>
                        <label for="documento">Ingrese el DNI:</label>
                        <input type="number" name="documento" id="documento" class="form-control mt-3 shadow">
                        <input type="submit" name="btnInvitado" class="btn btn-primary my-3 px-3 shadow" value="Verificar invitado"></input>
                    </div>
                    <div>
                        <label for="codigo">ingresa el codigo secreto para el pase VIP:</label>
                        <input type="password" name="codigo" id="codigo" class="form-control mt-3 shadow">
                        <input type="submit" name="btnVip" class="btn btn-primary my-3 px-3 shadow" value="Verificar codigo"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>