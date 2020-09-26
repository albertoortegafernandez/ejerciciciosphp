<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio08</title>
    </head>
    <body>
        
        <h1>El mejor quinteto NBA del 2020</h1>
        <ul>
             <?php
                
                $equipo[1]="Lebron James";
                $equipo[2]="James Harden";
                $equipo[3]="Anthony Davis";
                $equipo[4]="Giannis Antetokounmpo";
                $equipo[5]="Luka Doncic";

                foreach ($equipo as $jugador){
                    echo $jugador . '<br>';
                }

                echo "<hr>";

                    foreach ($equipo as $position => $jugador) {
                    echo "<li>" . $position . ": " . $jugador . "</li>";
                     }   
            ?>

        </ul>
    </body>
</html>