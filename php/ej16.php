<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio 16</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej16.php" method="post">
        <h2>Ingrese un número entero</h2>
        <br>
        <input type="number" name="num" min="0" placeholder="Numero entero">
        <br><br>
        <button type="submit">Enviar</button>
        <br><br>
        <?php
            if($_POST)
            {
                $num = $_POST["num"];
                for($i = 1; $i<=$num; $i++)
                {
                    echo $i .", ";
                }
            }
            include('../footer.html');
        ?> 
    </form>
</body>
</html>