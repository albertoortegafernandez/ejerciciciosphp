<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/colores.css">
    <title>Colores con sesiones</title>
    </head>
    <body id="<?= $_SESSION['color']?>">

    <h1>Bienvenido al home </h1><br><br>
        
    <h2>¿De que color ponemos el fondo de su página?</h2><br>
        
    <form method="post" action="?method=cambio">
        <input type="submit" value="azul" name="color" >
        <input type="submit" value="amarillo" name="color" >
        <input type="submit" value="verde" name="color" >   
        <input type="submit" value="rojo" name="color" >
    </form> 
</body>
</html>