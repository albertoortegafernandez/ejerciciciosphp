<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio16</title>
    </head>
    <body>
            
            <form method="post" action="16.php">
            <label>Nombre: </label> <input type="text" value="" name="nombres[]"><br>
            
            <input type="hidden" value="enviar">
            <hr>
                <?php
                if(isset ($_POST['nombres'])){
                    foreach ($_POST['nombres'] as $position => $nombre) {
                        echo "<li>" . $position . ": " . $nombre . "</li>";
                    }  
                    }
                ?> 
            </form>
    </body>

</html>