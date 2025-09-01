function validarArchivo(){
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
        var maxSize = 2 * 1024 * 1024; 
        var allowedExtensions = ["pdf", "doc"];
        var extension = file.name.split(".").pop().toLowerCase();

        if (!allowedExtensions.includes(extension)) {
            inputArchivo.classList.add("is-invalid");
            errorArchivo.textContent = "Solo se aceptan archivos .doc o .pdf.";
        } 
        else if (file.size > maxSize) {
            inputArchivo.classList.add("is-invalid");
            errorArchivo.textContent = "El archivo no puede superar los 2MB.";
        }
        else {
            inputArchivo.classList.add("is-valid");
            aciertoArchivo.textContent = "Archivo válido.";
            respuesta = true;
        }
    }
    return respuesta;
}