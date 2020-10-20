<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  </head>
<body>
    <?php /*var_dump($_SESSION); */?>
    <h1>Bienvenido al home <?php echo $_SESSION['usuario'] ?> </h1><br><br>
    <h2>Esta es tu lista de deseos</h2>
        <?php
        if($_SESSION['deseos']){
            '<ul>';
                foreach($_SESSION['deseos'] as $id=> $deseo){
                    echo"<li> Deseo nº $id:" .$deseo.'<a href= "?method=delete&id='.$id.'"> Borrar</a> </li>';
                }
            
            '</ul>';
            }else{
                echo "<h3>No hay deseos en su lista</h3>";
            }?>
            
    <h2>¿Deseas incluir un nuevo deseo?</h2>
    
        <form method="POST" action="?method=new">
            <label>Nuevo Deseo</label> <input type="text" value="" name="newDeseo" >
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