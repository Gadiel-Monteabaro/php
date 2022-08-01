<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Preguntar si existe el archivo

if (file_exists("archivo.txt")) {
    //vamos a leerlo y almacenarlo en jsonClientes

    $jsonClientes = file_get_contents("archivo.txt");

    //jsonClientes, convertirlo en un array llamado "aClientes"
    $aClientes = json_decode($jsonClientes, true);

    //Sino existe el archivo le damos un "aClientes" como un array vacio.
} else {
    $aClientes = array();
}

$pos = isset($_GET["pos"]) && $_GET["pos"] >= 0 ? $_GET["pos"] : "";

if ($_POST) {
    $dni = trim($_POST["txtDni"]);
    $nombre = trim($_POST["txtNombre"]);
    $telefono = trim($_POST["txtTelefono"]);
    $correo = trim($_POST["txtCorreo"]);


    if ($pos >= 0) {
        //actualizar
        $aClientes[$pos] = array(
            "documento" => $dni,
            "nombre" => $nombre,
            "telefono" => $telefono,
            "correo" => $correo,
        );
    } else {
        $aClientes[] = array(
            "documento" => $dni,
            "nombre" => $nombre,
            "telefono" => $telefono,
            "correo" => $correo,
        );
    }

    //tenemos que convertir el array "aClientes a json"
    $jsonClientes = json_encode($aClientes);
    //Almacenar el string en el archivo.txt
    file_put_contents("archivo.txt", $jsonClientes);
}





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
                        <input type="number" name="txtDni" id="txtDni" class="shadow form-control" value="<?php echo isset($aClientes[$pos]) ? $aClientes[$pos]["documento"] : ""; ?>" required>
                    </div>
                    <div class="pb-4">
                        <label for="txtNombre">Nombre:*</label>
                        <input type="text" name="txtNombre" id="txtNombre" class="shadow form-control" placeholder="Ingrese el nombre y apellido" value="<?php echo isset($aClientes[$pos]) ? $aClientes[$pos]["nombre"] : ""; ?>" required>
                    </div>
                    <div class="pb-4">
                        <label for="txtTelefono">Telefono:</label>
                        <input type="number" name="txtTelefono" id="txtTelefono" class="shadow form-control" value="<?php echo isset($aClientes[$pos]) ? $aClientes[$pos]["telefono"] : ""; ?>">
                    </div>
                    <div class="pb-4">
                        <label for="txtCorreo">Correo:*</label>
                        <input type="text" name="txtCorreo" id="txtCorreo" class="shadow form-control" required value="<?php echo isset($aClientes[$pos]) ? $aClientes[$pos]["correo"] : ""; ?>">
                    </div>
                    <div class="pb-4">
                        <label for="archivo">Archivo Adjunto:</label>
                        <input type="file" name="archivo" id="archivo" accept=".jpg,.jpeg,.png">
                        <small class="d-block">Archivos Admitidos: .jpg, .jpeg, .png</small>
                    </div>
                    <div>
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
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($aClientes as $pos => $cliente) : ?>
                            <tr class="fil-datos">
                                <td></td>
                                <td><?php echo $cliente["documento"]; ?></td>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["correo"]; ?></td>
                                <td>
                                    <a href="index.php?pos=<?php echo $pos; ?>&do=editar"><i class="fa-solid fa-pencil"></i></a>
                                    <a href="index.php?pos=<?php echo $pos; ?>&do=eliminar"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>