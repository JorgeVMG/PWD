<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../vista/css/style.css">
</head>
<body>
    <?php 
        echo "<form id='from7' name='from7' method='post' action='../../modelo/1/destino7.php'>
                <label for='ingresar'>Ingresar 2 numeros</label><br>
                <input type='text' name='num1' id='num2'><br>
                <input type='text' name='num2' id='num2'><br>
                <select name='operacion' id='operacion'>
                    <option value='suma'>Suma</option>
                    <option value='resta'>Resta</option>
                    <option value='multiplicacion'>Multiplicacion</option>
                    <option value='division'>Division</option>
                </select>
                <input type='submit' name='submit' value='Calcular'>
            </form>";
    ?>
</body>
</html>