<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2 GET</title>
    <link rel="stylesheet" href="../../vista/css/style.css">
</head>
<body> 
    <?php 
        echo'<form id="form2" name="form2" method="get" action="../../modelo/1/destino2.php">
        Lunes: <input name="horario_lunes" type="number" id="horario_lunes"><br>
        Martes: <input name="horario_martes" type="number" id="horario_martes"><br>
        Miércoles: <input name="horario_miercoles" type="number" id="horario_miercoles"><br>
        Jueves: <input name="horario_jueves" type="number" id="horario_jueves"><br>
        Viernes: <input name="horario_viernes" type="number" id="horario_viernes"><br>
        <input name="submit" type="submit" value="Aceptar">
     </form>'
    ?>
</body>
</html>