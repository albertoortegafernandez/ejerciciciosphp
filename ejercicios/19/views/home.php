<html>

    <h1>Bienvenido al home <?php echo $_COOKIE['usuario'] ?> </h1><br><br>

    
    <h2>Esta es tu lista de deseos</h2>
        <ol>
            <?php
                    foreach($deseos as $deseo){
                    echo'<li>' .$deseo.'</li>';
                    }
            ?>
        </ol>
    <h2>¿Deseas incluir un nuevo deseo?</h2>

    <form method="POST" action="?method=new">
        <label>Nuevo Deseo</label> <input type="text" value="" name="newDeseo" >
        <input type="submit" value="Enviar">
   
    <h2>¿Deseas borrar un deseo de tu lista?. Indique el numero</h2> 

    <form method="POST" action="?method=delete">
        <label>Eliminar Deseo</label> <input type="text" value="" name="delete" >
        <input type="submit" value="Enviar">             
    
    
    <h2>¿Deseas borrar toda tu lista?.</h2> 
    
    <form method="POST" action="?method=empty">
        <label >Eliminar Lista</label> <input type="submit" value="Eliminar" name="adiosLista" >
        
    
    
    <br>
    <a href="?method=close"> Cierre Sesion</a>

</html>