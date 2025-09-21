    <script src="../js/1/validacionFormularioTP1.js"></script>
    <script>
            let tpInput = document.getElementsByName('tp')[0];
            let tp = tpInput.value;

            if (tp === 'TP1') {
                document.addEventListener('DOMContentLoaded', function () {
                    let form = document.getElementById('formulario');
                    form.addEventListener('submit', function (event) {
                        if (! validarEjercicio()) {
                            event.preventDefault(); 
                        }
                    });
                });
            }
        
    </script>

</body>

</html>