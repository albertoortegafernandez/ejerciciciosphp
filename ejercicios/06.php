<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio06</title>
    </head>
    <body>
        
        <h1>El mejor quinteto NBA del 2020</h1>
        <ul>

             <?php
                $equipo=["Lebron James","James Harden","Anthony Davis","Giannis Antetokounmpo","Luka Doncic"];
        
                    foreach ($equipo as $jugador) {
                    echo "<li>". $jugador . "</li>"; 
                    }

                echo "<hr>";

                    foreach ($equipo as $position => $jugador) {
                    echo "<li>" . $position . ": " . $jugador . "</li>";
                     }   
            ?>

        </ul>
    </body>
</html>