<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio10</title>
    </head>
    <body>
        
        <h1>El mejor quinteto NBA del 2020</h1>
        <ul>

             <?php
                //Anterior array ejercicio 07
                /*$equipo=["Lebron James","James Harden","Anthony Davis","Giannis Antetokounmpo","Luka Doncic"];*/
                
                $equipo["Alero"]="Lebron James";
                $equipo["Escolta"]="James Harden";
                $equipo["Ala-Pivot"]="Anthony Davis";    
                $equipo["Pivot"]="Giannis Antetokounmpo";
                $equipo["Base"]="Luka Doncic";

                    foreach ($equipo as $position => $jugador) {
                        
                    echo "<li>" . $position . ": " . $jugador . "</li>";
                     }   
                     
            ?>

        </ul>
    </body>
</html>