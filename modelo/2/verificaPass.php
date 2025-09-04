<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino 3 usuario y contraseña validos o invalidos</title>
</head>
<body>
    <?php
        $usuarios = [["usuario" => "juan","contrasena" => "A2345678"],
                    ["usuario" => "maria","contrasena" => "abc12345"],
                    ["usuario" => "pedro","contrasena" => "qwerty46"],
                    ["usuario" => "ana","contrasena" => "pass2025"],
                    ["usuario" => "sofia","contrasena" => "admin999"]];
        if($_POST){
            $usuarioIngresado = $_POST["usuario"];
            $contrasenaIngresada = $_POST["contrasena"];
            $accesoConcedido = 0;
            $i = 0; 
            $total = count($usuarios);
            do {
                if ($usuarios[$i]["usuario"] === $usuarioIngresado && $usuarios[$i]["contrasena"] === $contrasenaIngresada) {
                    $accesoConcedido = 1;
                }
                $i++;
            } while ($i < $total);
            if($accesoConcedido==1){
                echo "Bienvenido, $usuarioIngresado";
            } else {
                echo "Usuario o contrasena incorrectos.";
            }
        }
    ?>
</body>
</html>