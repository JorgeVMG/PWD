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
        session_start();
        $_SESSION['mensaje'] = $respuesta;

        header("Location: ../1/mensaje.php");
        exit;

    case 'TP2':
        require_once '../../control/2/controlFormularioTp2.php';
        $controller = new controlFormulario();
        $func = "formulario".$ej;
        $respuesta = $controller->$func($data);
        session_start();
        $_SESSION['mensaje'] = $respuesta;
        if($ej == "4"){
            header("Location: ../2/mensajeTp2F4.php");
        }else{
            header("Location: ../2/mensajeTp2.php");
        }
        
        exit;

    case 'TP3':
        require_once '../Controllers/TP3Controller.php';
        $controller = new TP3Controller();
        $func = "ej$ej";
        $resultado = $controller->$func($data);
        include '../Views/TP3/mensaje.php';
        break;
}