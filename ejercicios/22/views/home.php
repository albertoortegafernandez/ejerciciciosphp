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
    <?php          
        if($_SESSION['color']=="Azul"){?>
            <body id="azul"> <?php
        }if($_SESSION['color']=="Amarillo"){?>
            <body id="amarillo"> <?php
        }if($_SESSION['color']=="Verde"){?>
            <body id="verde"> <?php
        }if($_SESSION['color']=="Rojo"){?>
            <body id="rojo"> <?php
    }?>        
    <h1>Bienvenido al home </h1><br><br>
        
    <h2>¿De que color ponemos el fondo de su página?</h2><br>
        
    <form method="post" action="?method=cambio">
        <input type="submit" value="Azul" name="azul" >
        <input type="submit" value="Amarillo" name="amarillo" >
        <input type="submit" value="Verde" name="verde" >   
        <input type="submit" value="Rojo" name="rojo" >
    </form> 
</body>
</html>