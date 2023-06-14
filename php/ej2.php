<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 2</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej2.php" method="post">
        <h2>Obtener (a - b) * (a + b)</h2>
        <h3>Ingrese un numero A</h3>
        <input type="number" name="numeroA" placeholder="Numero 1">
        <h3>Ingrese un numero B</h3>
        <input type="number" name="numeroB" placeholder="Numero 2">
        <br>
        <br>
        <button type="submit">Enviar</button>
        <br><br>
        
        <?php
        //Obtener (a - b) * (a + b)
        if($_POST)
        {
            $numA = $_POST["numeroA"];
            $numB = $_POST["numeroB"];
            $operacion = ($numA - $numB) * ($numA + $numB);
            echo "Siendo A = " .$numA. ", y B = " .$numB. "<br>";
            echo "El resultado de la operacion (a - b) * (a + b) es: " .$operacion;
        }
        
    include('../footer.html'); ?>
    </form>
</body>
</html>