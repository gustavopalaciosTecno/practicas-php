<?php

include 'index.php';

if(isset($_POST['edad'])){

if($_POST['edad']>= 18 && ($_POST['edad'] < 65)){
    echo " <h1>Tu edad es de: ".$_POST['edad']." años y eres apto para trabajar</h1>";
}
if($_POST['edad'] < 18 ){
    echo " <h1>NO eres apto para trabajar</h1>";
}

if($_POST['edad'] > 65 ){
    echo " <h1>Estas en etapa de Jubilación, ya sos anciano chamigo</h1>";
}
}else{
    echo "<h1>Colocá tu edad por favor !</h1>";
}

?>
<h2>Confirme su edad para saber si es apto</h2>
<form action="edad.php" method="POST">
    <label for="edad">Edad</label>
    <input type="number" style="width:90px" name="edad" min="10" max="100">

    <input type="submit" style="background-color: aquamarine;width: 90px;" value="enviar">
    <ul>
    <li> <a href="index.php">Limpiar</a></li>
  </ul>
</form>
