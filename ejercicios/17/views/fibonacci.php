<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fibonacci"</title>
</head>
<body>
<h1>Los números de la sucesión fibonacci menores a 1 millon son:</h1>
<?php
  foreach($fibonacci as $num){   
    echo $num." ";      
  }
?>
</body>
</html>