<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 3 con Get</title>
    <link rel="stylesheet" href="../../vista/css/style.css">
</head>
<body>
    <?php 
        //formulario con metodo get que envie a destinoGet.php
        echo "<form id='from3' name='from3' method='get' action='../../modelo/1/destinoGet.php'>
        <label for='nombre'>nombre</label><input type='text' name='nombre' id='nombre' pl><br>
        <label for='apellido'>apellido</label><input type='text' name='apellido' id='apellido' plac><br>
        <label for='edad'>edad</label><input type='number' name='edad' id='edad' ><br>
        <label for='direccion'>direccion</label><input type='text' name='direccion' id='direccion' ><br>
        <input type='submit' name='submit' value='Enviar'>
        </form>";
    ?>
</body>
</html>