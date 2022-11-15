<?php
function dump ($obj) {
    echo '<pre>';
    print_r($obj);
    echo '</pre>';
}

// Se define directorio de cargas, puede llamarse como sea.
$dirUploads = './uploads/';

// Se evalúa el post
if (isset($_POST['DatosForm'])) {
    dump($_POST['DatosForm']);

    // Se evalúa la global FILES
    if (!empty($_FILES['DatosForm'])) {
        // Si el directorio de carga no se encuentra, crearlo
        if (!file_exists($dirUploads)) {
            mkdir($dirUploads);
        }

        // Establecer nuevo nombre del archivo y obtener el archivo temporal
        $tmpName = $_FILES['DatosForm']['tmp_name']['archivo'];
        $fileName = $_FILES['DatosForm']['name']['archivo'];

        // Intentar mover archivo
        if (!move_uploaded_file($tmpName, $dirUploads . $fileName)) {
            // Si no se puede mover, mostrar error
            die('error guardando archivo');
        }
        
        dump($_FILES['DatosForm']);
    }
    die();
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba form</title>
</head>
<body>
    <?php /* formulario de prueba */ ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <?php /* Asignando nombre global de formulario para validaciones */ ?>
        <div>
            <input type="text" name="DatosForm[nombre]">
        </div>
        <div>
            <input type="file" name="DatosForm[archivo]">
        </div>

        <div>
            <input type="submit" value="Continuar">
        </div>
    </form>
</body>
</html>