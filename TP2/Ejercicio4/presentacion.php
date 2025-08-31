<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    ?>
</body>
</html>