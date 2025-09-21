<?php include "../estructura/cabecera/incio.php"; ?>
    <div id='form'>
        <form id='formulario' name='from' method='post' action='../action/action.php'>
            <h2>Ingresar sus datos</h2>
            <input type="hidden" name="tp" value="TP1">
            <input type="hidden" name="ejercicio" value="6">
            <div class="cuadros2">
                <label for='nombre'>nombre</label>
                <input type='text' name='nombre' id='nombre' >
            </div>
            <div class="cuadros2">
                <label for='apellido'>apellido</label>
                <input type='text' name='apellido' id='apellido' >
            </div>
            <div class="cuadros2">
                <label for='edad'>edad</label>
                <input type='text' name='edad' id='edad' >
            </div>
            <div class="cuadros2">
                <label for='direccion'>direccion</label>
                <input type='text' name='direccion' id='direccion' >
            </div>
            <div class="resp"></div>
            <hr>
            <p>Sexo</p>
            <div class="cuadros2">
                <label for='masculino'>Masculino</label>
                <input type='radio' name='sexo' value='masculino' id='masculino' checked>
            </div>
            <div class="cuadros2">
                <label for='femenino'>Femenino</label>
                <input type='radio' name='sexo' value='femenino' id='femenino'>
            </div>
            <div class="cuadros2">
                <label for='otro'>Otro</label>
                <input type='radio' name='sexo' value='otro' id='otro'>
            </div>
            <hr>
            <p>Nivel De Estudio</p>
            <div class="cuadros2">
                <label for='no_estudios'>Nulo</label>
                <input type='radio' name='estudios' value='1' id='no-estudios' checked>
            </div>
            <div class="cuadros2">
                <label for='primarios'>Primario</label>
                <input type='radio' name='estudios' value='2' id='primarios' >
            </div>
            <div class="cuadros2">
                <label for='secundarios'>Secundario</label>
                <input type='radio' name='estudios' value='3' id='secundarios'>
            </div>
            <hr>
            <p>Deportes que Realiza</p>
            <div class="cuadros2">
                <label for='futbol'>Futbol</label>
                <input type='checkbox' id='deporte' name='deporte[]' value='Futbol'>
            </div>
            <div class="cuadros2">
                <label for='basket'>Basket</label>
                <input type='checkbox' id='deporte' name='deporte[]' value='Basket'>
            </div>
            <div class="cuadros2">
                <label for='tennis'>Tennis</label>
                <input type='checkbox' id='deporte' name='deporte[]' value='Tennis'>
            </div>
            <div class="cuadros2">
                <label for='voley'>Voley</label>
                <input type='checkbox' id='deporte' name='deporte[]' value='Voley'>
            </div>
            <hr>
            <input type='submit' name='submit' value='Enviar'>
        </form>
    </div>

<?php include "../estructura/pie/footer.php"; ?>