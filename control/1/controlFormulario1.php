<?php
class controlFormulario{
    function validarPositividad(){
        $respuesta = "";
        if ($_POST){
            $numeroFormulario = $_POST['numero-form'];
            if ($numeroFormulario > 0) {
                $respuesta ="<h3>El número $numeroFormulario es positivo</h3>";
            } elseif ($numeroFormulario < 0) {
                $respuesta = "<h3>El número $numeroFormulario es negativo</h3>";
            } else {
                $respuesta = "<h3>El número $numeroFormulario no es positivo ni negativo</h3>";
            }
        } else {
            $respuesta = "No se recibieron datos<br>";
        }
        return $respuesta;
    }
}


