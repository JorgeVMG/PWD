<?php
$target_dir = "uploads/";
$tmpFile = $_FILES["fileToUpload"]["tmp_name"];
$contenido = file_get_contents($tmpFile);
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$mensaje = "";
$verArchivo = "";

if(isset($_POST["submit"])) {
    $fileType = mime_content_type($_FILES["fileToUpload"]["tmp_name"]);

    if ($fileType !== "text/plain") {
        $mensaje = "Tipo de archivo no permitido. Solo se aceptan archivos de texto (.txt).";
        $uploadOk = 0;
    } else {
        $uploadOk = 1;
        $contenido = file_get_contents($target_file);
    }
}

if (file_exists($target_file)) {
  $uploadOk = 0;
}

if ($uploadOk == 0) {
    $mensaje .= "Lo sentimos, no fue posible la carga de su archivo ";
}else{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $mensaje .= "El archivo se subió correctamente. ";
    }
}
   



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir archivo</title>
</head>
<body>
    <?php
        echo "<h2>Subir Archivo</h2>";
        echo $mensaje;

            echo "<h3>Contenido del archivo:</h3>";
            echo "<textarea rows='10' cols='50' readonly>" . htmlspecialchars($contenido) . "</textarea>";
        ?>
</body>
</html>