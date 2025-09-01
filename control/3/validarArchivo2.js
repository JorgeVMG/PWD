function validarArchivo2(){
    var inputArchivo = document.getElementById("fileToUpload");
    var errorArchivo = document.getElementById("errorArchivo");
    var aciertoArchivo = document.getElementById("aciertoArchivo");

    inputArchivo.classList.remove("is-invalid", "is-valid");
    errorArchivo.textContent = "";
    aciertoArchivo.textContent = "";

    var respuesta = false;
    if (inputArchivo.files.length === 0) {
        inputArchivo.classList.add("is-invalid");
        errorArchivo.textContent = "Debes seleccionar un archivo.";
    } else {
        var file = inputArchivo.files[0]; 
        var allowedExtensions = ["txt"];
        var extension = file.name.split(".").pop().toLowerCase();

        if (!allowedExtensions.includes(extension)) {
            inputArchivo.classList.add("is-invalid");
            errorArchivo.textContent = "Solo se aceptan archivos .txt";
        }
        else {
            inputArchivo.classList.add("is-valid");
            aciertoArchivo.textContent = "Archivo válido.";
            respuesta = true;
        }
    }
    return respuesta;
}