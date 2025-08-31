<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../vista/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../../vista/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    /*pattern='(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}'title='Mínimo 8 caracteres, al menos una letra y un número' required
    se agrego para la validacion de la contraseña */
    echo "<div class='container mt-3 col-6' >
            <form class='col-4' id='form3' novalidate method='post' action='verificaPass.php'>
                <div class='border border-5 border-secondary p-3 mt-3 '>
                    <div class='row'>
                        <h3 class='text-center'>Member Login</h3>
                    </div>
                    <div class=' mb-3'>
                        <input type='text' class='form-control' id='usuario' name='usuario' placeholder='usuario' required>
                        <div class='valid-feedback'>
                            es correcto
                        </div>
                        <div class='invalid-feedback'>
                            ingrese su usuario
                        </div>
                    </div>
                    <div class='mb-3'>
                        <input type='password' class='form-control' id='contrasena' name='contrasena' placeholder='contrasena'
                        pattern='(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}'title='Mínimo 8 caracteres, al menos una letra y un número' required>
                        <div class='valid-feedback'>
                            es correcto
                        </div>
                        <div class='invalid-feedback'>
                            ingrese su contraseña (mínimo 8 caracteres, al menos una letra y un número)
                        </div>
                    </div>
                    <div class='mb-3 text-center'>
                        <input type='sumit' class='btn btn-success' value='Enviar'>
                    </div>
                </div>
            </form>
        </div>";
    ?>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <!--<script src="srcriptValidacionForm.js"></script>
    <script>
        document.getElementById("form3").addEventListener("submit", function(e) {
            if (!validarContrasena()) {
                e.preventDefault(); 
            }
        });
    </script>-->
</body>
</html>