<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
    /**La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en 
    función de la edad y de la condición de estudiante del cliente. Desea que sean los propios 
    clientes los que puedan calcular el valor de sus entradas a través de una página web. Si 
    es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual 
    de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un 
    formulario que solicite la edad y permita ingresar si se trata de un  estudiante o no. Con 
    un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo.  
    Agregar un botón para limpiar el formulario y volver a consultar.  */
    echo "<form id='form8' name='form8' method='post' action='destino8.php'>
        <label for='edad'>Edad:</label>
        <input type='number' name='edad' id='edad' required><br>
        <label for='estudiante'>¿Es estudiante?</label><br>
        <label for='estudianteSI'>SI</label><input type='radio' name='estudiante' id='estudianteSI' value='si' checked ><br>
        <label for='estudianteNO'>NO</label><input type='radio' name='estudiante' id='estudianteNO' value='no'><br>
        <input type='submit' value='Calcular precio'>
        <input type='reset' value='Limpiar'>
    </form>";
    ?>
</body>
</html>