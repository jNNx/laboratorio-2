<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 7</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej7.php" method="post">
        <h2>Escribir un algoritmo que lea tres números e indique que tipo de triangulo forman</h2>
        <br>
        <h3>Ingrese un numero A</h3>
        <input type="number" name="numeroA" placeholder="Lado 1">
        <br><br>
        <h3>Ingrese un numero B</h3>
        <input type="number" name="numeroB" placeholder="Lado 2">
        <br><br>
        <h3>Ingrese un numero C</h3>
        <input type="number" name="numeroC" placeholder="Lado 3">
        <br><br>
        <button type="submit">Enviar</button>
        <br><br>
        <?php 
        /*  Triángulo equilátero. Tres lados iguales
            Triángulo isósceles. Dos lados iguales.
            Triángulo escaleno. Tres lados desiguales. 
        */
            if($_POST)
            {
                $numA = $_POST["numeroA"];
                $numB = $_POST["numeroB"];
                $numC = $_POST["numeroC"];
                if ($numA == $numB)
                {
                    if ($numB == $numC)
                    {
                        echo "Es un triángulo equilátero.";
                    }
                    else
                    {
                        echo "Es un triángulo isósceles.";
                    }
                }
                else
                {
                    if ($numA != $numC)
                    {
                        echo "Es un triángulo escaleno.";
                    }
                }
            }
            include('../footer.html');
        ?>
    </form>
</body>
</html>