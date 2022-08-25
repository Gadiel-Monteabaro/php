<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$aCliente = array();

if (isset($_SESSION["listadoClientes"])) {
    $aCliente = $_SESSION["listadoClientes"];
} else {
    $aCliente = array();
}

if ($_POST) {

    if (isset($_POST["btnEnviar"])) {

        $nombreCliente = $_POST["txtNombre"];
        $dniCliente = $_POST["txtDni"];
        $telefonoCliente = $_POST["txtTelefono"];
        $edadCliente = $_POST["txtEdad"];

        $aCliente[] = array(
            "nombreCliente" => $nombreCliente,
            "dniCliente" => $dniCliente,
            "telefonoCliente" => $telefonoCliente,
            "edadCliente" => $edadCliente,
        );

        $_SESSION["listadoClientes"] = $aCliente;
    }

    if (isset($_POST["btnEliminar"])) {
        session_destroy();
        $aCliente = array();
    }
}

if (isset($_GET["pos"])) {
    $pos = $_GET["pos"];
    unset($aCliente[$pos]);
    //Actualizo la variable de session con el array actualizado
    $_SESSION["listadoClientes"] = $aCliente;
    header("Location: clientes_session1.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado De Clientes</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de Clientes</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <form method="POST" action="">
                    <div class="pb-4">
                        <label for="txtNombre">Nombre:</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="shadow form-control" placeholder="Ingrese el nombre y apellido">
                    </div>
                    <div class="pb-4">
                        <label for="txtDni">DNI:</label>
                        <input type="number" name="txtDni" id="txtDni" class="shadow form-control">
                    </div>
                    <div class="pb-4">
                        <label for="txtTelefono">Telefono:</label>
                        <input type="number" name="txtTelefono" id="txtTelefono" class="shadow form-control">
                    </div>
                    <div class="pb-4">
                        <label for="txtEdad">Edad:</label>
                        <input type="number" name="txtEdad" id="txtEdad" class="shadow form-control">
                    </div>
                    <div>
                        <button type="submit" name="btnEnviar" class="btn btn-primary px-3 shadow">Enviar</button>
                        <button type="submit" name="btnEliminar" class="btn btn-danger px-3 shadow">Eliminar</button>
                    </div>
                </form>
            </div>
            <div class="col-8">
                <table class="shadow table table-hover">
                    <thead>
                        <tr class="fil-datos">
                            <th>Nombre:</th>
                            <th>DNI:</th>
                            <th>Telefono:</th>
                            <th>Edad:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- clave -->
                        <?php foreach ($aCliente as $pos => $cliente) : ?>
                            <tr class="fil-datos">
                                <td><?php echo $cliente["nombreCliente"]; ?></td>
                                <td><?php echo $cliente["dniCliente"]; ?></td>
                                <td><?php echo $cliente["telefonoCliente"]; ?></td>
                                <td><?php echo $cliente["edadCliente"]; ?></td>
                                <td><a href="clientes_session1.php?pos=<?php echo $pos; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>