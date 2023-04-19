<?php

if($_POST['numero'] %2 == 0){
    echo "<h3>EL VALOR ".$_POST['numero']." ES PAR</h3>";
}else{
    echo "<h3>EL VALOR ".$_POST['numero']." ES IMPAR</h3>";
}



?>
<h2>Averiguamos si el valor es par o impar</h2>
<h3>Limitado de 1 al 1000</h3>
<form action="par.php" method="POST">
    <label for="valor">Número</label>
    <input type="number" style="background:rgb(147, 199, 147);color:blue;" name="numero" min="0" max="1000">
    <br>
    <input type="submit" value="enviar">
</form>