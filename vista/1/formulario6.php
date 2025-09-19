<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 6 deportes</title>
    <link rel="stylesheet" href="../css/styleForm.css">
</head>
<body>
    
    <?php 
    /*Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes 
    deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página 
    que procesa el formulario la cantidad de deportes que practica*/
    echo "<div id='forms'>
        <form id='from6' name='from6' method='get' action='../../modelo/1/destino6.php'>
            <div id='opciones'>
                <label for='nombre'>nombre</label>
                <input type='text' name='nombre' id='nombre' ><br>
            </div>
            <div id='opciones'>
                <label for='apellido'>apellido</label>
                <input type='text' name='apellido' id='apellido' ><br>
            </div>
            <div id='opciones'>
                <label for='edad'>edad</label>
                <input type='number' name='edad' id='edad' ><br>
            </div>
            <div id='opciones'>
                <label for='direccion'>direccion</label>
                <input type='text' name='direccion' id='direccion' ><br>
            </div>
            <hr>
            <p>Sexo</p>
            <div id='opciones'>
                <label for='masculino'>Masculino</label>
                <input type='radio' name='sexo' value='masculino' id='masculino' checked><br>
            </div>
            <div id='opciones'>
                <label for='femenino'>Femenino</label>
                <input type='radio' name='sexo' value='femenino' id='femenino'><br>
            </div>
            <div id='opciones'>
                <label for='otro'>Otro</label>
                <input type='radio' name='sexo' value='otro' id='otro'><br>
            </div>
            <hr>
            <p>Nivel De Estudio</p>
            <div id='opciones'>
                <label for='no_estudios'>No tiene estudio</label>
                <input type='radio' name='estudios' value='1' id='no-estudios' checked><br>
            </div>
            <div id='opciones'>
                <label for='primarios'>Primario</label>
                <input type='radio' name='estudios' value='2' id='primarios' ><br>
            </div>
            <div id='opciones'>
                <label for='secundarios'>Secundario</label>
                <input type='radio' name='estudios' value='3' id='secundarios'><br>
            </div>
            <hr>
            <div id='opciones'>
                <label for='futbol'>Futbol</label>
                <input type='checkbox' id='deporte' name='deporte[]' value='Futbol'><br>
            </div>
            <div id='opciones'>
                <label for='basket'>Basket</label>
                <input type='checkbox' id='deporte' name='deporte[]' value='Basket'><br>
            </div>
            <div id='opciones'>
                <label for='tennis'>Tennis</label>
                <input type='checkbox' id='deporte' name='deporte[]' value='Tennis'><br>
            </div>
            <div id='opciones'>
                <label for='voley'>Voley</label>
                <input type='checkbox' id='deporte' name='deporte[]' value='Voley'><br>
            </div>
            <hr>
        <input type='submit' name='submit' value='Enviar'>
    </form>
    </div>";
    ?>
</body>
</html>