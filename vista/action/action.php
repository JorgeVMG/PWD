<?php
$method = $_SERVER['REQUEST_METHOD'];
$data   = $method === 'POST' ? $_POST : $_GET;

$tp = $data['tp'] ?? null;          
$ej = $data['ejercicio'] ?? null;   

switch ($tp) {
    case 'TP1':
        require_once '../../control/1/controlFormularioTp1.php';
        $controller = new controlFormulario();
        $func = "formulario".$ej;       
        $respuesta = $controller->$func($data);
        
        $mensaje = "../1/mensaje.php"; 
        include $mensaje;
        break;

    case 'TP2':
        require_once '../Controllers/TP2Controller.php';
        $controller = new TP2Controller();
        $func = "ej$ej";
        $resultado = $controller->$func($data);
        include '../Views/TP2/mensaje.php';
        break;

    case 'TP3':
        require_once '../Controllers/TP3Controller.php';
        $controller = new TP3Controller();
        $func = "ej$ej";
        $resultado = $controller->$func($data);
        include '../Views/TP3/mensaje.php';
        break;
}