<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//preguntamos si existe el archivo
if (file_exists("archivo.txt")) {
    //vamos a leerlo y almacenarlo en jsonClientes
    $jsonClientes =  file_get_contents("archivo.txt");
    //convertir jsonClientes en un array llamado aClientes
    $aClientes = json_decode($jsonClientes, true);
} else {
    //sino existe el archivo
    //creamos un aClientes vacio
    $aClientes = array();
}

if ($_POST) {
    $documento = trim($_POST["txtDni"]);
    $nombre = trim($_POST["txtNombre"]);
    $telefono = trim($_POST["txtTelefono"]);
    $correo = trim($_POST["txtCorreo"]);

    $aClientes[] = array(
        "documento" => $documento,
        "nombre" => $nombre,
        "telefono" => $telefono,
        "correo" => $correo,
    );

    //convertir el array a jsonClientes
    $jsonClientes = json_encode($aClientes);

    //almacenar el string json en el archivo.txt
    file_put_contents("archivo.txt", $jsonClientes);
}



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
                        <input type="text" id="txtNombre" name="txtNombre" class="shadow form-control" required>
                    </div>
                    <div class="pb-4">
                        <label for="txtTelefono">Telefono:</label>
                        <input type="number" id="txtTelefono" name="txtTelefono" class="shadow form-control">
                    </div>
                    <div class="pb-4">
                        <label for="txtCorreo">Correo:*</label>
                        <input type="email" id="txtCorreo" name="txtCorreo" class="shadow form-control" required>
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
                        <?php foreach ($aClientes as $pos => $cliente) : ?>
                            <tr>
                                <td></td>
                                <td> <?php echo $cliente["documento"]; ?></td>
                                <td><?php echo $cliente["nombre"]; ?></td>
                                <td><?php echo $cliente["correo"]; ?></td>
                                <td>
                                    <a href="index.php?pos=<?php echo $pos; ?> &do=editar"><i class="fa-solid fa-pen"></i></a>
                                    <a href="index.php?pos=<?php echo $pos; ?> &do=eliminar"><i class="fa-solid fa-trash"></i></a>
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