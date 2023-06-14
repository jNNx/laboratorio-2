<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 1</title>

</head>
<body>

        <?php include('../navbar-2.html'); ?>
        <form action="../php/ej1.php" method="post">
            <h2>Hallar A+B-C+100</h2>
            <h3>Ingrese un numero A</h3>
            <input type="number" name="numeroA" placeholder="Numero 1">
            <h3>Ingrese un numero B</h3>
            <input type="number" name="numeroB" placeholder="Numero 2">
            <h3>Ingrese un numero C</h3>
            <input type="number" name="numeroC" placeholder="Numero 3">
            <br><br>
            <button type="submit">Enviar</button>
            <br><br>
            <?php
                /* Hallar A+B-C+100 */
                if($_POST)
                {
                    $numA = $_POST["numeroA"];
                    $numB = $_POST["numeroB"];
                    $numC = $_POST["numeroC"];
                    $suma = $numA+$numB-$numC+100;
                    echo "Con los valores A = " .$numA .", B = " .$numB. ", y C = " .$numC . "<br/>" ."<br/>";
                    echo "El resultado de la operacion A+B-C+100 = " . $suma;
                }
            include('../footer.html'); ?>

    </form>
    </body>
    
</html>    

