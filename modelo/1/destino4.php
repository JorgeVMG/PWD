<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino 4 mayor o menor de edad</title>
    <link rel="stylesheet" href="../../vista/css/styleDestino.css">
</head>
<body>
    <?php 
    if($_GET){
        $nombre = $_GET["nombre"];
        $apellido = $_GET["apellido"];
        $edad = $_GET["edad"];
        $direccion = $_GET["direccion"];
        echo "Hola, yo soy $nombre $apellido";
        if($edad >= 18) {
            echo ", tengo $edad años, soy mayor de edad y vivo en $direccion";
        } else {
            echo ", tengo $edad años, soy menor de edad y vivo en $direccion";
        }
    } else {
        echo "No se recibieron datos<br>";
    }
    ?>
</body>
</html>