<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 3 con Post</title>
    <link rel="stylesheet" href="../css/styleFormularios.css">
</head>
<body>
    <?php 
        //formulario con metodo post que envie a destinoPost.php
        echo "<div id='form'>
        <form id='from3' name='from3' method='post' action='../../modelo/1/destinoPost.php'>
        <label for='nombre'>nombre</label><input type='text' name='nombre' id='nombre' pl><br>
        <label for='apellido'>apellido</label><input type='text' name='apellido' id='apellido' plac><br>
        <label for='edad'>edad</label><input type='number' name='edad' id='edad' ><br>
        <label for='direccion'>direccion</label><input type='text' name='direccion' id='direccion' ><br>
        <input type='submit' name='submit' value='Enviar'>
        </form>";
    ?>
</body>
</html>