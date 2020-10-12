<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  </head>
<body>
    <h1>Bienvenido al home <?php echo $_COOKIE['usuario'] ?> </h1><br><br>

    
    <h2>Esta es tu lista de deseos</h2>
        <ol>
            <?php     
                    if($_COOKIE['deseos']||$_COOKIE['deseos2']){
                        
                        foreach($deseos as $deseo){
                            echo'<li>' .$deseo.'</li>';
                    }
                }else{
                    echo '<h3>Tu lista está vacia</h3>';
                }
            ?>
        </ol>
    <h2>¿Deseas incluir un nuevo deseo?</h2>
    
        <form method="POST" action="?method=new">
            <label>Nuevo Deseo</label> <input type="text" value="" name="newDeseo" >
            <input type="submit" value="Enviar">
        </form>   
    <h2>¿Deseas borrar un deseo de tu lista?. Indique el numero</h2> 

        <form method="POST" action="?method=delete">
            <label>Eliminar Deseo</label> <input type="text" value="" name="eliminar" >
            <input type="submit" value="Enviar">     
        </form>
    <h2>¿Deseas borrar toda tu lista?.</h2> 

        <form method="POST" action="?method=empty">
            <label >Eliminar Lista</label> <input type="submit" value="Aceptar" name="adiosLista" >
        </form>    

    <br>
    <a href="?method=close"> Cierre Sesion</a>
</body>
</html>