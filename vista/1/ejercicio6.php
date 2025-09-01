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
    /*Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes 
    deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página 
    que procesa el formulario la cantidad de deportes que practica*/
    echo "
    <form id='from6' name='from6' method='get' action='../../modelo/1/destino6.php'>
        <label for='nombre'>nombre</label><input type='text' name='nombre' id='nombre' pl><br>
        <label for='apellido'>apellido</label><input type='text' name='apellido' id='apellido' plac><br>
        <label for='edad'>edad</label><input type='number' name='edad' id='edad' ><br>
        <label for='direccion'>direccion</label><input type='text' name='direccion' id='direccion' ><br>
        <label for='sexo'>Sexo</label><br>
        <label for='masculino'>Masculino</label><input type='radio' name='sexo' value='masculino' id='masculino'><br>
        <label for='femenino'>Femenino</label><input type='radio' name='sexo' value='femenino' id='femenino'><br>
        <label for='otro'>Otro</label><input type='radio' name='sexo' value='otro' id='otro'><br>
        <label for='estudios'>Nivel de estudios</label><br>
        <label for='no_estudios'>No tiene estudios</label><input type='radio' name='estudios' value='1' id='no_estudios'><br>
        <label for='primarios'>Estudios primarios</label><input type='radio' name='estudios' value='2' id='primarios'><br>
        <label for='secundarios'>Estudios secundarios</label><input type='radio' name='estudios' value='3' id='secundarios'><br>
        <label for='deporte'>Deporte</label>
        <select name='deporte' id='deporte' multiple>
            <option value='futbol'>Futbol</option>
            <option value='basket'>Basket</option>
            <option value='tennis'>Tennis</option>
            <option value='voley'>Voley</option>
        </select><br>
        <input type='submit' name='submit' value='Enviar'>
    </form>";
    ?>
</body>
</html>