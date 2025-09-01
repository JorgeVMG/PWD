<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../vista/css/styleDestino.css">
</head>
<body>
    <?php 
        if($_POST){
            $num1 = (float)$_POST['num1'];
            $num2 = (float)$_POST['num2'];
            if(is_string($num1)){
                echo "El valor 1 ingresado no es un número";
            }elseif( is_string($num2)){
                echo "El valor 2 ingresado no es un número";
            }
            else{
                $operacion = $_POST['operacion'];
                switch ($operacion) {
                    case 'suma':
                        $resultado = $num1 + $num2;
                        echo "El resultado de la suma es: " . $resultado;
                        break;
                    case 'resta':
                        $resultado = $num1 - $num2;
                        echo "El resultado de la resta es: " . $resultado;
                        break;
                    case 'multiplicacion':
                        $resultado = $num1 * $num2;
                        echo "El resultado de la multiplicacion es: " . $resultado;
                        break;
                    case 'division':
                        if($num2 != 0){
                            $resultado = $num1 / $num2;
                            echo "El resultado de la division es: " . $resultado;
                        } else {
                            echo "No se puede dividir por cero.";
                        }
                        break;
                    default:
                        echo "Operacion no valida.";
                        break;
                }
            }
        } else {
            echo "No se han enviado datos.";
        }
    ?>
</body>
</html>