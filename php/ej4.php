<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 4</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej4.php" method="post">
        <h2>Dados dos numeros, mostrar su producto</h2>
        <h3>Ingrese el primer numero</h3>
        <input type="number" name="numeroA" placeholder="Numero 1">
        <h3>Ingrese el segundo numero</h3>
        <input type="number" name="numeroB" placeholder="Numero 2">
        <br>
        <br>
        <button type="submit">Enviar</button>
        <br>
        <br>

        <?php
        //Dados dos numeros, mostrar su producto
        if($_POST)
        {
            $numA = $_POST["numeroA"];
            $numB = $_POST["numeroB"];
            $producto = $numA * $numB;
            echo "El resultado del producto de los numeros A = " .$numA. " y B = " .$numB. " es: " .$producto;
        }
        include('../footer.html'); ?>
    </form>
</body>
</html>
