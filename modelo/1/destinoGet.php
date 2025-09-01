<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../vista/css/styleDestino.css">
</head>
<body>
    <?php 
    // “Hola, yo soy nombre , apellido tengo edad años y vivo en dirección” //
    if($_GET){
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];
        $direccion = $_GET['direccion'];
        echo "Hola, yo soy $nombre $apellido tengo $edad años y vivo en $direccion";
    } else {
        echo "No se recibieron datos<br>";
    }
    ?>
</body>
</html>