<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ejercicio02</title>
    </head>
</head>
<body>
    <?php
    define('ultimo', 10);
    $number = 8;

    for ($row = 1; $row <= ultimo; $row++) {
        
        echo "<tr>";
            echo "<td>", $number. '*' .$row. ' = '  ,"</td>";
            echo "<td>", $number*$row ,"</td>";
            echo "<br>";
        echo "</tr>";
    }
    ?>
</body>
</html>