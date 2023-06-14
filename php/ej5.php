<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 5</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej5.php" method="post">
        <h2>Dado número, verificar si es mayor a 100</h2>
        <br>
        <h3>Ingrese un número</h3>
        <br>
        <input type="number" name="numero" placeholder="Numero">
        <br><br>
        <button type="submit">Enviar</button>
        <br><br>
        
        <?php
            //Dado número, verificar si es mayor a 100
            if($_POST)
            {
                $num = $_POST["numero"];
                $resultado = $num > 100 ? 'Es mayor a 100' : 'Es menor a 100';
                echo $resultado;
            }
            include('../footer.html'); 
        ?>
    </form>
</body>
</html>