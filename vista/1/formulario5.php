<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 5 Estudios </title>
    <link rel="stylesheet" href="../css/styleForm.css">
</head>
<body>
    <div id='forms'>
        <form id='from5' name='from5' method='get' action='../../modelo/1/destino5.php'>
            <div id="opciones">
                <label for='nombre'>nombre</label>
                <input type='text' name='nombre' id='nombre' ><br>
            </div>
            <div id="opciones">
                <label for='apellido'>apellido</label>
                <input type='text' name='apellido' id='apellido' ><br>
            </div>
            <div id="opciones">
                <label for='edad'>edad</label>
                <input type='number' name='edad' id='edad' ><br>
            </div>
            <div id="opciones">
                <label for='direccion'>direccion</label>
                <input type='text' name='direccion' id='direccion' ><br>
            </div>
            <hr>
            <p>Sexo</p>
            <div id="opciones">
                <label for='masculino'>Masculino</label>
                <input type='radio' name='sexo' value='masculino' id='masculino' checked><br>
            </div>
            <div id="opciones">
                <label for='femenino'>Femenino</label>
                <input type='radio' name='sexo' value='femenino' id='femenino'><br>
            </div>
            <div id="opciones">
                <label for='otro'>Otro</label>
                <input type='radio' name='sexo' value='otro' id='otro'><br>
            </div>
            <hr>
            <p>Nivel De Estudio</p>
            <div id="opciones">
                <label for='no_estudios'>No tiene estudio</label>
                <input type='radio' name='estudios' value='1' id='no-estudios' checked><br>
            </div>
            <div id="opciones">
                <label for='primarios'>Primario</label>
                <input type='radio' name='estudios' value='2' id='primarios' ><br>
            </div>
            <div id="opciones">
                <label for='secundarios'>Secundario</label>
                <input type='radio' name='estudios' value='3' id='secundarios'><br>
            </div>
            <hr>
            <input type='submit' name='submit' value='Enviar'>
        </form>
    </div>
    <?php 
    /**Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes 
    “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2
    estudios primarios, 3-estudios secundarios. Agregar el componente que crea más 
    apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además 
    un mensaje que indique el tipo de estudios que posee y su sexo.  */
    echo ""
    ?>
</body>
</html>