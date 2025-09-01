<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$mensaje = "";
$verArchivo = "";
if(isset($_POST["submit"])) {
    $fileType = mime_content_type($_FILES["fileToUpload"]["tmp_name"]);

    $allowedTypes = ["application/pdf", "application/msword", 
    "application/vnd.openxmlformats-officedocument.wordprocessingml.document"];

    if (in_array($fileType, $allowedTypes)) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
  $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 2097152) { 
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    $mensaje .= "Lo sentimos, no fue posible la carga de su archivo ";
}else{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        
        $mensaje .= "El archivo se subió correctamente. ";
        $verArchivo .="<a href='" . $target_file . "' target='_blank'>Abrir archivo</a>";
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
        echo "<h2>Subir Archivos</h2> ";
        echo $mensaje;
        if($uploadOk == 1){
            echo $verArchivo;
        } 
    ?>
</body>
</html>