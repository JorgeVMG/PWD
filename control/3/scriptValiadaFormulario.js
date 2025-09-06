function validarAnio() {
    var anoInput = document.getElementById("ano");
    var anio = anoInput.value;
    var respuesta = false;

    if (anio.length === 4 && !isNaN(anio)) {
        anoInput.classList.remove("is-invalid");
        anoInput.classList.add("is-valid");
        respuesta = true;
    }else{
        anoInput.classList.remove("is-valid");
        anoInput.classList.add("is-invalid");
        respuesta = false;
    }
    return respuesta;
}
function validarDuracion(){
    var duracionInput = document.getElementById("duracion");
    var duracion = duracionInput.value;
    var respuesta = false;
    if(duracion.length <=3 && duracion > 0){
        duracionInput.classList.remove("is-invalid");
        duracionInput.classList.add("is-valid");
        respuesta = true;
    }else{
        duracionInput.classList.remove("is-valid");
        duracionInput.classList.add("is-invalid");
        respuesta = false;
    }
    return respuesta;
}
function Validartitutlo(){
    var tituloInput = document.getElementById("titulo");
    var titulo = tituloInput.value;
    var respuesta = false;
    if(titulo.length > 0){
        tituloInput.classList.remove("is-invalid");
        tituloInput.classList.add("is-valid");
        respuesta = true;
    }else{
        tituloInput.classList.remove("is-valid");
        tituloInput.classList.add("is-invalid");
        respuesta = false;
    }  
    return respuesta;
}
function validarDirector(){
    var directorInput = document.getElementById("director");
    var director = directorInput.value;
    var respuesta = false;
    if(director.length > 0){
        directorInput.classList.remove("is-invalid");
        directorInput.classList.add("is-valid");
        respuesta = true;
    }else{
        directorInput.classList.remove("is-valid");
        directorInput.classList.add("is-invalid");
        respuesta = false;
    }
    return respuesta;
}
function validarActores(){
    var actoresInput = document.getElementById("actores");
    var actores = actoresInput.value;
    var respuesta = false;
    if(actores.length > 0){
        actoresInput.classList.remove("is-invalid");
        actoresInput.classList.add("is-valid");
        respuesta = true;
    }else{
        actoresInput.classList.remove("is-valid");
        actoresInput.classList.add("is-invalid");
        respuesta = false;
    }
    return respuesta;
}
function validarGuion(){
    var guionInput = document.getElementById("guion");
    var guion = guionInput.value;
    var respuesta = false;
    if(guion.length > 0){
        guionInput.classList.remove("is-invalid");
        guionInput.classList.add("is-valid");
        respuesta = true;
    }else{
        guionInput.classList.remove("is-valid");
        guionInput.classList.add("is-invalid");
        respuesta = false;
    }
    return respuesta;
}
function validarProduccion(){
    var produccionInput = document.getElementById("produccion");
    var produccion = produccionInput.value;
    var respuesta = false;
    if(produccion.length > 0){
        produccionInput.classList.remove("is-invalid");
        produccionInput.classList.add("is-valid");
        respuesta = true;
    }else{
        produccionInput.classList.remove("is-valid");
        produccionInput.classList.add("is-invalid");
        respuesta = false;
    }   
    return respuesta;
    
}
function validarNacionalidad(){
    var nacionalidadInput = document.getElementById("nacionalidad");
    var nacionalidad = nacionalidadInput.value;
    var respuesta = false;
    if(nacionalidad.length > 0){
        nacionalidadInput.classList.remove("is-invalid");
        nacionalidadInput.classList.add("is-valid");
        respuesta = true;
    }else{
        nacionalidadInput.classList.remove("is-valid");
        nacionalidadInput.classList.add("is-invalid");
        respuesta = false;
    }
    return respuesta;
}
function validarFormulario() {
    var anio = validarAnio();
    var duracion = validarDuracion();
    var titulo = validartitutlo();
    var director = validarDirector();
    var actores = validarActores();
    var guion = validarGuion();
    var produccion = validarProduccion();
    var nacionalidad = validarNacionalidad();
    var resultado = false;
    if(anio && duracion && titulo && director && actores && guion && produccion && nacionalidad){
        resultado = true;
    }
    return resultado;
}