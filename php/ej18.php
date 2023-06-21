<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 18</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej18.php" method="post">
        <h2>Ingrese un número entero</h2>
        <br>
        <input type="number" name="num" min="1">
        <br><br>
        <button type="submit">Enviar</button>
        <br><br>
        <?php
            if($_POST)
            {
                $num = $_POST["num"];
                for($i = $num-1; $i>=1; $i--)
                {
                    $num = $num + $i;
                }
                echo $num;
            }
            include('../footer.html');
        ?> 
    </form>
</body>
</html>