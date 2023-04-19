<?php
include 'index.php';
?>
<h2>Formulario de inscripcion</h2>
    <div class="container">
        <form action="enviar.php" method="POST">
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre"><br>
            <label for="apellidos">Apellidos</label><br>
            <input type="text" name="apellidos"><br>
            <label for="date">Fecha de nacimiento</label><br>
            <input type="date" name="date"><br>
            <label for="domicilio">Domicilio</label><br>
            <input type="text" name="domicilio"><br>
            <label for="number">N° de teléfono</label><br>
            <input type="number" name="number"><br>
            <label for="password">Contraseña</label><br>
            <input type="password" name="password"><br>
            <input type="submit" value="enviar información">
        </form>
    </div>