<?php
include 'index.php';
if (isset($_POST['submit'])) {
    
 if($_POST['dia']=='lunes'){
    echo "";
 }
}

?>

<form method="POST">
  <input type="radio" name="dia" value="lunes">Lunes<br>
  <input type="radio" name="dia" value="martes">Martes<br>
  <input type="radio" name="dia" value="miércoles">Miércoles<br>
  <input type="radio" name="dia" value="jueves">Jueves<br>
  <input type="radio" name="dia" value="viernes">Viernes<br>
  <input type="radio" name="dia" value="sábado">Sábado<br>
  <input type="radio" name="dia" value="domingo">Domingo<br>
  <input type="submit" name="submit" value="Confirmar">
  <ul>
    <li> <a href="index.php">Limpiar</a></li>
  </ul>
</form>

