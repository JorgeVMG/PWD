<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$mensaje = "";
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $uploadOk = 0;
}


// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $mensaje = "se ingreso correctamente";
  } else {
    $mensaje = "no se ingreso ";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentacion 3 Formulario Cine Cinem@s</title>
</head>
<body>
    <h1>Datos Recibidos</h1>
    <?php
        if ($_POST) {
            $titulo = $_POST['titulo'];
            $actores = $_POST['actores'];
            $director = $_POST['director'];
            $guion = $_POST['guion'];
            $produccion = $_POST['produccion'];
            echo "<p>Titulo: $titulo</p>";
            echo "<p>Actores: $actores</p>";
            echo "<p>Director: $director</p>";
            echo "<p>Guion: $guion</p>";
            echo "<p>Produccion: $produccion</p>";
            if(!empty($_POST['genero'])) {
                $generos = $_POST['genero'];
                echo "<p>Generos: " . implode(", ", $generos) . "</p>";
            } else {
                echo "<p>No se seleccionaron generos.</p>";
            }
            $pais = $_POST['nacionalidad'];
            echo "<p>Pais: $pais</p>";
            $sinopsis = $_POST['sinopsis'];
            if($sinopsis != "") {
                echo "<p>Sinopsis: $sinopsis</p>";
            } else {
                echo "<p>No se proporciono sinopsis.</p>";
            }
        } else {
            echo "<p>No se recibieron datos del formulario.</p>";
        }
        echo $mensaje;
    ?>
</body>
</html>