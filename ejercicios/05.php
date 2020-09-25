<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio05</title>
    </head>
    <body>
        <?php
        define('CONSTANTE',169);
        $primo=true;
        echo"<h1>",'Los divisores de 169 son: ',"</h1>";

        for($divisor=2;$divisor<CONSTANTE;$divisor++){

            if(CONSTANTE % $divisor == 0){
                $primo=false;
                echo $divisor . "<br>";
            }
            else{
                 
            }

        }
        if($primo){
            echo "169 es un numero primo";
        }

        ?>
    </body>
</html>