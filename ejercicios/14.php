<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio14</title>
    </head>
    <body>
            <h3>Calculadora </h3>
            <form method="post" action="14.php">
            <label>Valor 1: </label> <input type="text" value="" name="v1"><br>
            <label>Valor 2: </label> <input type="text" value="" name="v2"><br>
            <select name="operacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicacion</option>
                <option value="division">Division</option>
            </select>
                <input type="submit" value="enviar">
            
             <hr>
                <?php
                    if($_POST['v1'] !="" && $_POST['v2'] !=""){
                        if($_POST["operacion"]=="suma"){
                            echo "El resultado de la suma es: ".($resultado=$_POST['v1']+$_POST['v2']);
                        }elseif($_POST["operacion"]=="resta"){
                            echo "El resultado de la resta es: ".($resultado=$_POST['v1']-$_POST['v2']);
                        }elseif($_POST["operacion"]=="multiplicacion"){
                            echo "El resultado de la multiplicacion es: ".($resultado=$_POST['v1']*$_POST['v2']);
                        }elseif($_POST["operacion"]=="division"){
                            echo "El resultado de la division es: ".($resultado=$_POST['v1']/$_POST['v2']);
                        }
                    }
                ?>
            </form> 
    </body>

</html>