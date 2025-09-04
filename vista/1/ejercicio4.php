<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 4 Mayor o Menor de edad</title>
   <link rel="stylesheet" href="../../vista/css/style.css">
</head>
<body>
    <?php
        /**Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar 
        esos datos a otra página en donde se muestren mensajes distintos dependiendo si la 
        persona es mayor de edad o no; (si la edad es mayor o igual a 18). 
        Enviar los datos usando el método GET y luego probar de modificar los datos 
        directamente en la url para ver los dos posibles mensajes. */   
        echo "<form id='from4' name='from4' method='get' action='../../modelo/1/destino4.php'>
        <label for='nombre'>nombre</label><input type='text' name='nombre' id='nombre' pl><br>
        <label for='apellido'>apellido</label><input type='text' name='apellido' id='apellido' plac><br>
        <label for='edad'>edad</label><input type='number' name='edad' id='edad' ><br>
        <label for='direccion'>direccion</label><input type='text' name='direccion' id='direccion' ><br>
        <input type='submit' name='submit' value='Enviar'>
        </form>";
    ?>
</body>
</html>