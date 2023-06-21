<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 8</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej8.php" method="post">
        <h2>Crear un algoritmo que lea dos números y muestre el mayor de los dos</h2>
        <br>
        <h3>Ingrese un numero A</h3>
        <input type="number" name="numeroA" placeholder="Primer numero">
        <br><br>
        <h3>Ingrese un numero B</h3>
        <input type="number" name="numeroB" placeholder="Segundo numero">
        <br><br>
        <button type="submit">Enviar</button>
        <br><br>
        <?php
            //Crear un algoritmo que lea dos números y muestre el mayor de los dos
            if($_POST)
            {
                $numA = $_POST["numeroA"];
                $numB = $_POST["numeroB"];
                $resultado = $numA > $numB ? $numA : $numB;
                echo "El mayor de los números ingresados es: ".$resultado;
            }
            include('../footer.html');
        ?>
    </form>
</body>
</html>