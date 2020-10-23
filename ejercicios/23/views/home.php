<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  </head>
<body>
    <h1>Bienvenido al home</h1><br><br>
    <h2>Esta es tu lista de deseos</h2>
    <?php 
        /*$file="views/deseos.txt";
        $fp=fopen($file,"r");
        $contents=fread($fp,filesize($file));
        fclose($fp);
        var_dump($contents);*/
        var_dump($deseos);
    ?>
       

    <h2>¿Deseas incluir un nuevo deseo?</h2>
    
        <form method="POST" action="?method=new">
            <label>Nuevo Deseo</label> <input type="text" value="" name="newDeseo" >
            <input type="submit" value="Enviar">
        </form>   

    <h2>¿Deseas borrar toda tu lista?.</h2> 

        <form method="POST" action="?method=empty">
            <label >Eliminar Lista</label> <input type="submit" value="Aceptar" name="adiosLista" >
        </form>    

</body>
</html>