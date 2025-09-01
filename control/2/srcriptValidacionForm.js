function validarContrasena() {
    const input = document.getElementById("contrasena");
    const contrasena = input.value;

    // Resetear clases
    input.classList.remove("is-invalid", "is-valid");

    if (contrasena.length >= 8) {
        if (/(?=.*[A-Za-z])(?=.*\d)/.test(contrasena)) {
            input.classList.add("is-valid");
            return true;
        } else {
            input.classList.add("is-invalid");
            return false;
        }
    } else {
        input.classList.add("is-invalid");
        return false;
    }
}
