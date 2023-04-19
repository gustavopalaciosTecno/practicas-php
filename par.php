<?php

if($_POST['numero'] %2 == 0){
    echo "<h3>EL VALOR ".$_POST['numero']." ES PAR</h3>";
}else{
    echo "<h3>EL VALOR ".$_POST['numero']." ES IMPAR</h3>";
}



?>
<h2>Averiguamos si el valor es par o impar</h2>
<form action="par.php" method="POST">
    <label for="valor">Número</label>
    <input type="text" name="numero">
    <br>
    <input type="submit" value="enviar">
</form>