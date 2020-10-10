<html>

<h1>Bienvenido al home <?php echo $_COOKIE['usuario'] ?> </h1><br><br>

<a href="?method=logout"> Cierre Sesion</a>
<h1>Lista de cookies</h1>
    <pre>
      <?php
      if(!empty($_COOKIE)){
        var_dump($_COOKIE);
      }
      ?>
    </pre>
</html>