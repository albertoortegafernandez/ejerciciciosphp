<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>ejercicio12</title>
</head>
<body>

    <?php
        if((isset($_POST) && !empty($_POST))){
            echo "Hola ".$_POST['nombre'];
              }
          else{ ?>
             <h3>Por favor rellene su nombre </h3>

            <form method="post" action="12.php">
            <label>Nombre</label> <input type="text" value="" name="nombre" required>
            <input type="submit" value="enviar">
            </form>
           <?php } ?> 
    
</body>
</html>