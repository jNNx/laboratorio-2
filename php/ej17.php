<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 17</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej17.php" method="post">
        <h2>Ingrese dos números ordenados de menor a mayor.</h2>
        <br>
        <h3>Ingrese el primer número</h3>
        <input type="number" name="numA" placeholder="Primer numero">
        <br><br>
        <h3>Ingrese el segundo número</h3>
        <input type="number" name="numB" placeholder="Segundo numero">
        <br><br>
        <button type="submit">Enviar</button>
        <br><br>
        <?php
            if($_POST)
            {
                $numA = $_POST["numA"];
                $numB = $_POST["numB"];
                for($i = $numA; $i<=$numB; $i++)
                {
                    echo $i .", ";
                }
            }
            include('../footer.html');
        ?> 
    </form>
</body>
</html>