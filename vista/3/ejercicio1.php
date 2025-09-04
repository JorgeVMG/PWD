<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 1 subir archivo .doc o .pdf</title>
    <link rel="stylesheet" href="../vista/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../vista/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="../../control/3/validarArchivo.js"></script>
</head>
<body>
    <div class="container">
        <form action="../../modelo/3/upload.php" method="post" class="needs-validation" novalidate id="form-subir" name="form-subir" enctype="multipart/form-data">
            <div class="col-6 mb-3">
                <label for="archivo">Selecciona un archivo: (.doc o .pdf, máx 2MB)</label><br>
                <input name="fileToUpload" id="fileToUpload" class="form-control" type="file" >
                <div class="invalid-feedblack" id="errorArchivo"></div>
                <div class="valid-feedblack" id="aciertoArchivo"></div>
            </div>
            <div class="col-6">
                <input type="submit" class="btn btn-primary" value="enviar">
            </div>
        </form>
    </div>
    <script>
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if(!validarArchivo()){
                    event.preventDefault();
                    event.stopPropagation(); 
                }
            })
        })
    </script>
</body>
</html>