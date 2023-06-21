<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 12</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej12.php" method="post">
        <h2>Dado 3 números mostrar la suma, resta, el producto y el cociente si son positivos</h2>
        <br>
        <h3>Ingrese el primer número</h3>
        <input type="number" name="numeroA" min="0" placeholder="Primer numero">
        <br><br>
        <h3>Ingrese el segundo número</h3>
        <input type="number" name="numeroB" min="0" placeholder="Segundo numero">
        <br><br>
        <h3>Ingrese el tercer número</h3>
        <input type="number" name="numeroC" min="0" placeholder="Tercer numero">
        <br><br>
        <button type="submit">Enviar</button>
        <br><br>
        <?php
            //Dado 3 números mostrar la suma, resta, el producto y el cociente si son positivos
            if($_POST)
            {
                $numA = $_POST["numeroA"];
                $numB = $_POST["numeroB"];
                $numC = $_POST["numeroC"];

                $suma = $numA+$numB+$numC;
                $resta = $numA-$numB-$numC;
                $producto = $numA*$numB*$numC;
                if($numA && $numB && $numC != 0)
                {
                    $cociente = ($numA/$numB)/$numC;
                    echo "El resultado de la suma es: " .$suma. ", resta: " .$resta. ", producto: " .$producto. " y cociente: " .$cociente;
                }
                else
                {
                    echo "El resultado de la suma es: " .$suma. ", resta: " .$resta. ", producto: " .$producto. " y cociente no se puede dividir por 0.";
                }
            }
            include('../footer.html');
        ?>
    </form>
</body>
</html>