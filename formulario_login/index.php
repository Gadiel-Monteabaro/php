<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
if (isset($_POST["txtPassword"]) && isset($_POST["txtUsuario"])) {
    $msg = "Valido solo para Usuarios registrados";
} else {
    header("Location:http://localhost/php/formulario_login/acceso-confirmado.php");
}
*/

if (isset($_POST["txtUsername"]) == "") {
    $msg = "Valido Para Usuarios Registrados";
} else {
    header("Location:http://localhost/php/formulario_login/acceso-confirmado.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Ingreso</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 py-5 ">
                    <h1>Formulario</h1>
                    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form method="POST" action="">
                        <div class="pb-4">
                            <label for="txtUsername">Usuario:</label>
                            <input type="text" name=txtUsername id=txtUsername class="shadow form-control">
                        </div>
                        <div class="pb-4">
                            <label for="txtPassword">Clave:</label>
                            <input type="password" name=txtPassword id=txtPassword class="shadow form-control">
                        </div>
                        <div class="col-12 alert alert-danger">
                            <p><?php echo $msg ?></p>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary px-5">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>