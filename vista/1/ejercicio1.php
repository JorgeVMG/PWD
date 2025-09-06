<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1 Post</title>
    <link rel="stylesheet" href="../css/styleFormularios.css">
</head>
<body>
   <?php
        echo'<div id="form">
                <form id="form1" name="form1" method="post" action="../../modelo/1/destino1.php">
                    <label for="numero">Ingrese Un Número</label><br>
                    <input name="numero-form" type="number" id="numero-form"><br>
                    <input name="submit" type="submit" value="Aceptar">
                </form>
            </div>';
    ?>
</body>
</html>