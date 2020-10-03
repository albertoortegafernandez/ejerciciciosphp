<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi aplicacion web</title>
</head>
<body>
<?php
    require_once "App.php";
    $app=new App;
    echo "Metodo Fibonacci";
    $app->fibonacci();
    echo "<hr>";
?>
</body>
</html>










