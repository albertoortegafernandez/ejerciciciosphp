<?php
if(isset($_POST) && !empty($_POST)){
    echo "<h1>"."Bienvenido a la biblioteca del barrio"."</h1>";
    echo"<br>";
    echo "Acabamos de añadir el siguiente libro";
 
    echo "<hr><pre>";
    var_dump($_POST);
}
 else {
     echo "No hemos recibido nada!";
}
