<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino 6 deportes</title>
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
            echo ", tengo $edad años, soy mayor de edad ";
        } else {
            echo ", tengo $edad años, soy menor de edad ";
        }
        $sexo = $_GET["sexo"];
        if($sexo == "masculino") {
            echo "y mi sexo es masculino, ";
        } elseif($sexo == "femenino") {
            echo "y mi sexo es femenino, ";
        } else {
            echo "y mi sexo es otro, ";
        }
        $estudios = $_GET["estudios"];
        if($estudios == "1") {  
            echo "no tengo estudios y vivo en $direccion";
        } elseif($estudios == "2") {
            echo "tengo estudios primarios ";
        } else {
            echo "tengo estudios secundarios";
        }
        if($_GET["deporte"]){
            $deporte = $_GET["deporte"];
            echo " practico $deporte. <br>Y vivo en $direccion";
        } else {
            echo " no practico deportes. <br>Y vivo en $direccion";
        }
    } else {
        echo "No se recibieron datos<br>";
    }
    ?>
</body>
</html>