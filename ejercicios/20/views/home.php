<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="views/colores.css">
  <title>Home</title>
  </head>
  <?php           
    foreach($color as $pinta){
        if($pinta=="Azul"){?>
            <body id="azul"> <?php
        }if($pinta=="Amarillo"){?>
            <body id="amarillo"> <?php
        }if($pinta=="Verde"){?>
            <body id="verde"> <?php
        }if($pinta=="Rojo"){?>
            <body id="rojo"> <?php
        }
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