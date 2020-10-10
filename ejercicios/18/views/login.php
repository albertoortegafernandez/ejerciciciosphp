<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>LOGIN</h1>
    <form method="post" action="?method=auth">
        <label>Usuario</label> <input type="text" value="" name="usuario" required>
        <label>Contraseña</label> <input type="text" value="" name="pass" required>
        <input type="submit" value="enviar">
    </form>

    <h1>Lista de cookies</h1>
    <pre>
      <?php
      if(!empty($_COOKIE)){
        var_dump($_COOKIE);
      }
      ?>
    </pre>
</body>
</html>