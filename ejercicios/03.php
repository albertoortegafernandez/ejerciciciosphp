<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio03</title>
    </head>
</head>
<body>
    <?php
    define('ultimo', 10);
    $number = 3;

    echo "<h1>",'Los numeros divisibles por 3 hasta el 10 son: ',"</h1>";
    for ($row = 1; $row <= ultimo; $row++) {
        if($row % 3==0)
        echo $row,'. ';
    }
    
    ?>
</body>
</html>