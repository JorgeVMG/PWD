<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cine Cinem@s</title>
    <link rel="stylesheet" href="../booststrap/bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <script src="../booststrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
    <script src="../../control/3/scriptValiadaFormulario.js"></script>
</head>
<body>
    <div class="container">
        <form action="../../modelo/3/presentacion3.php" novalidate class="row g-3 needs-validation" id="form4" method="post" enctype="multipart/form-data">
            <div class="col-6">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" name="titulo" required>
                <div class="valid-feedback">
                    es correcto
                </div>
                <div class="invalid-feedback">
                    Datos del Titulo incompletos o incorrectos
                </div>
            </div>
            <div class="col-6">
                <label for="actores" class="form-label">Actores</label>
                <input type="text" class="form-control" id="actores" name="actores" required>
                <div class="valid-feedback">
                    es correcto
                </div>
                <div class="invalid-feedback">
                    Datos del Actor incompletos o incorrectos
                </div>
            </div>
            <div class="col-6">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" name="director" required>
                <div class="valid-feedback">
                    es correcto
                </div>
                <div class="invalid-feedback">
                    Datos del Director incompletos o incorrectos
                </div>
            </div>
            <div class="col-6">
                <label for="guion" class="form-label">guion</label>
                <input type="text" class="form-control" id="guion" name="guion" required>
                <div class="valid-feedback">
                    es correcto
                </div>
                <div class="invalid-feedback">
                    Datos del guion incompletos o incorrectos
                </div>
            </div>
            <div class="col-6">
                <label for="produccion" class="form-label">produccion</label>
               <input type="text" class="form-control" id="produccion" name="produccion" required>
                <div class="valid-feedback">
                    es correcto
                </div>
                <div class="invalid-feedback">
                    Datos produccion incompletos o incorrectos
                </div>
            </div>
            <div class="col-6">
                <label for="ano" class="form-label">A&ntilde;o</label><br>
                <input type="text" class="form-control" id="ano" name="ano" required>
                <div class="valid-feedback">
                    es correcto
                </div>
                <div class="invalid-feedback">
                    Datos del año incompletos o incorrectos
                </div>
            </div>
            <div class="col-6">
                <label for="nacionalidad" class="form-label">nacionalidad</label><br>
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required>
                <div class="valid-feedback">
                    es correcto
                </div>
                <div class="invalid-feedback">
                    Datos de la nacionalidad incompletos o incorrectos
                </div>
            </div>
            <div class="col-6">
                <label for="genero" class="form-label">Genero</label><br>
                <select name="Genero" id="Genero" required>
                    <option value="accion">Accion</option>
                    <option value="comedia">Comedia</option>
                    <option value="drama">Drama</option>
                    <option value="terror">Terror</option>
                    <option value="ciencia ficcion">Ciencia Ficcion</option>
                    <option value="romance">Romance</option>
                    <option value="aventura">Aventura</option>
                    <option value="animacion">Animacion</option>
                    <option value="documental">Documental</option>
                    <option value="musical">Musical</option>
                    <option value="suspenso">Suspenso</option>
                    <option value="fantasia">Fantasia</option>
                </select >
            </div>
            <div class="col-6">
                <label for="duracion" class="form-label">duracion</label><br>
                <input type="text" class="form-control" id="duracion" name="duracion" required> (minutos)
                <div class="valid-feedback">
                    es correcto
                </div>
                <div class="invalid-feedback">
                    Datos de la duracion incompletos o incorrectos
                </div>
            </div>
            <div class="col-6">
                <label for="restrincionDeEdad" class="form-label">Restricion De Edad</label><br>
                <input type="radio" id="restricionDeEdad" name="restrincionDeEdad" value="TP" checked>todos los publicos
                <input type="radio" id="restricionDeEdad" name="restrincionDeEdad" value="M+13">mayores de 7 a&ntilde;os
                <input type="radio" id="restricionDeEdad" name="restrincionDeEdad" value="M+16">mayores de 18 a&ntilde;os
            </div>
            <div class="col-6">
                <label for="sinopsis">Sinopsis</label> <br>
                <textarea class="form-control mb-3" name="sinopsis" id="sinopsis"></textarea>
            </div>
            <div class="col-6" >
                <label for="imagen" class="form-label">Ingrese imagen de la Pelicula</label>
                <input name="fileToUpload" id="fileToUpload" class="form-control" type="file">
                <div class="invalid-feedblack" id="errorArchivo"></div>
                <div class="valid-feedblack" id="aciertoArchivo"></div>
            </div>
            <div class="col-12"></div>
            <div class="col-6 text-center" >
                <input class="border border-2 rounded-pill " type="submit" value="Enviar">
            </div>
            <div class="col-6 text-center" >
                <input class="border border-2 rounded-pill " type="reset" value="borrar">
            </div>
        </form>
    </div>
    <script>
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if(!validarFormulario() ){
                    alert("fallo");
                    event.preventDefault();
                    event.stopPropagation(); 
                }else{
                    alert("todo bien");
                    event.preventDefault();
                    event.stopPropagation(); 
                }
            })
        })
    </script>    
</body>
</html>