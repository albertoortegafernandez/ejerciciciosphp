<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio09</title>
    </head>
    <body>
        
        <h1>PAISES DE MI ARRAY</h1>
        

             <?php
                $paises[0]="España";
                $paises[1]="Portugal";
                $paises[2]="Italia";
                $paises[3]="Francia";
        
                    foreach ($paises as $pais) {
                    echo $pais . "<br>"; 
                    } 
            ?>
    </body>
</html>