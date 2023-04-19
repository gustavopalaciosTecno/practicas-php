<?php
include 'index.php';

if(isset($_POST['color'])){

$_POST['color'];

if($_POST['color']=='verde'){
    echo $_POST['color']." este color si esta";
}elseif($_POST['color']=='azul'){
    echo $_POST['color']." este color si esta";
}elseif($_POST['color']=='amarillo'){
    echo $_POST['color']." este color si esta";

}else{
    echo "el color: ".$_POST['color']." no esta agendado";
}
}else{
    echo "Colocá el nombre de un color por favor !";
}
/*
if($color == "verde"){
    echo "el color es verde";
}else{
    echo "el color NO es verde";
}

*/
?>

<form action="colores.php" method="POST">
    <label for="nombre">Nombre del color</label><br>
    <input type="text" name="color"><br>
    
           
    <input type="submit" value="enviar">
    <ul>
        <li> <a href="index.php">Limpiar</a></li>
    </ul>
</form>