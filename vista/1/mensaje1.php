<?php
    include "../../control/1/controlFormulario1.php";
    $control = new controlFormulario();
    $respuesta = $control->validarPositividad();
    
    include "../estructura/cabecera/incio.php";
        echo "<div class='presentacion'>
        <div class='respuesta'>
            <h2>Resultado</h2> 
            $respuesta
            <input type='button' value='Regresar' onclick='history.back()'>
        </div>
    </div>";
    include "../estructura/pie/footer.php";
?>
    