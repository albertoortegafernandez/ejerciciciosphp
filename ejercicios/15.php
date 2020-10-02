<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio15</title>
    </head>
    <body>
            <h3> </h3>
            <form method="post" action="15.php">
            <label>Nombre1: </label> <input type="text" value="" name="nombres[]"><br>
            <label>Nombre2: </label> <input type="text" value="" name="nombres[]"><br>
            <label>Nombre3: </label> <input type="text" value="" name="nombres[]"><br>
            <input type="submit" value="enviar">
            <hr>
            </form>
            <?php
             var_dump($_POST);
            ?> 
    </body>

</html>