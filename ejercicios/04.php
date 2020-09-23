<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio04</title>
    </head>
</head>
<body>
    <?php
    define('ultimo', 10);
    $numero1 =0;
    $numero2=1;
    
    echo "<h1>",'Los 10 primeros números de la sucesión fibonacci son: ',"</h1>";
    echo $numero1,", ",$numero2,", ";
    for ($row = 1; $row < ultimo; $row++) {
        
        $suma=$numero1+$numero2;
        $numero1=$numero2;
        $numero2=$suma;
        echo $suma. ", ";

        }
    ?>
</body>
</html>