<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styleDestino.css">
</head>
<body>
    <?php
    /* Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual 
    de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. */
    if($_POST){
        $edad = $_POST['edad'];
        $estudiante = $_POST['estudiante'];
        if($estudiante == 'si' || $edad < 12){
            if($edad < 12){
                echo "El precio de la entrada es de $160";
            } else {
                echo "El precio de la entrada es de $180";
            }
        } else {
            echo "El precio de la entrada es de $300";
        }
    } else {
        echo "No se han recibido datos del formulario.";
    }
    ?>
</body>
</html>