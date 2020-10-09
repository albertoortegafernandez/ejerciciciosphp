<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio_01</title>
</head>
<body>
<?php
    $nombre= "Alberto";
    $apellidos="Ortega Fernández";
    $edad=32;
    $telefono=685573811;
    $email="alorfer@gmail.com";
    ?>
    <table>
        <tr>
            <td>Nombre: </td>
            <td> <?php print $nombre ?></td>
        </tr>
        <tr>
            <td><?php echo 'Apellidos: ' ?></td>
            <td><?php echo $apellidos ?></td>
        </tr>
        <tr>
            <td><? echo "Edad: " ?></td>
            <td><?php print $edad ?></td>
        </tr>
        <tr>
            <td>Teléfono: </td>
            <td><?php echo $telefono ?></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><?php print $email ?></td>
        </tr>
    </table>
    
</body>

</html>

