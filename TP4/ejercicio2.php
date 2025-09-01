<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>subirArchivo</title>
    <link rel="stylesheet" href="../vista/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../vista/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="validarArchivo2.js"></script>
</head>
<body>
    <div class="container">
        <form action="upload2.php" method="post" class="needs-validation" novalidate id="form-subir2" name="form-subir2" enctype="multipart/form-data">
            <div class="col-6 mb-3">
                <label for="archivo">Selecciona un archivo: (.text)</label><br>
                <input name="fileToUpload" id="fileToUpload" class="form-control" type="file">
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
                if(!validarArchivo2()){
                    event.preventDefault();
                    event.stopPropagation(); 
                }
            })
        })
    </script>
</body>
</html>