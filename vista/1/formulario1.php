<?php include "../estructura/cabecera/incio.php"; ?>

<div id="form">
  <form id="formulario" name="form" method="post" action="../action/action.php">
    <input type="hidden" name="tp" value="TP1">
    <input type="hidden" name="ejercicio" value="1">

    <label for="numero">Ingresar un Numero</label><br>
    <input name="numero-form" type="text" id="numero-form">
    <div class="resp"></div>
    <input name="submit" type="submit" value="Aceptar">
  </form>
</div>

<?php include "../estructura/pie/footer.php"; ?>
