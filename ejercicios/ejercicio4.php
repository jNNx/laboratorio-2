<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    
    <div class="datos">
        <form action="ejercicio4.php" method="post">
            Nombre:
            <input type="text" name="txtNombre" id="">
            <br>
            <br>
            Apellido:
            <input type="text" name="txtApellido" id="">
            <br>
            <br>
            <input type="submit" value="Enviar">
        </form>
    </div>
<?php
    //  Elimina el Warning porque al cargar el archivo aun no se envia nada por el metodo POST

    if($_POST){
        
    // Recibir informarcion del formulario HTML metodo POST
    
    $txtNombre=$_POST['txtNombre'];
    $txtApellido=$_POST['txtApellido'];['txtNombre'];

    echo "Hola " . $txtNombre. " ".$txtApellido;
    }
?>
</body>
</html>