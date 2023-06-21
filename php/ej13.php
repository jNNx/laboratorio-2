<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 13</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej13.php" method="post">
        <h3>Ingrese la primer nota</h3>
        <input type="number" name="notaA" min="0" placeholder="Nota 1">
        <br><br>
        <h3>Ingrese la segunda nota</h3>
        <input type="number" name="notaB" min="0" placeholder="Nota 2">
        <br><br>
        <h3>Ingrese la tercer nota</h3>
        <input type="number" name="notaC" min="0" placeholder="Nota 3">
        <br><br>
        <button type="submit">Enviar</button>
        <br><br>
        <?php
            /*Una maestra ingresa 3 notas por alumno obtener:
                el promedio de las notas, solamente los números positivos menores a 10, sino mostrar un mensaje “una de las notas no corresponde”
                b) mostrar la nota Mayor
                c) mostrar la nota Menor*/

            if($_POST)
            {
                $numA = $_POST["notaA"];
                $numB = $_POST["notaB"];
                $numC = $_POST["notaC"];

                if($numA && $numB && $numC <= 10)
                {
                    $promedio = ($numA+$numB+$numC) / 3;
                    echo "a) El promedio de las notas es: " .$promedio ."<br/>" ."<br/>";
                    if ($numA > $numB)
                    {
                        if ($numA > $numC)
                        {
                            $notaMayor = $numA;
                        }
                    }
                    else
                    {
                        if ($numB > $numC)
                        {
                            $notaMayor = $numB;
                        }
                        else
                        {
                            $notaMayor = $numC;
                        }
                    }
                    echo "b) La nota mayor es: " .$notaMayor ."<br/>" ."<br/>";
                    if ($numA < $numB)
                    {
                        if ($numA < $numC)
                        {
                            $notaMenor = $numA;
                        }
                    }
                    else
                    {
                        if ($numB < $numC)
                        {
                            $notaMenor = $numB;
                        }
                        else
                        {
                            $notaMenor = $numC;
                        }
                    }
                    echo "c) La nota menor es: " .$notaMenor;
                }
                else
                {
                    echo "a) Error, una de las notas no corresponde" ."<br/>" ."<br/>";
                }
            }
            include('../footer.html');
        ?>
    </form>
</body>
</html>