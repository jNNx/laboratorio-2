<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 10</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej10.php" method="post">
        <h2>Calcular el costo de una llamada en minutos.</h2>
        <br>
        <h3>Ingrese la duracion de la llamada en minutos.</h3>
        <input type="number" name="numeroA" placeholder="Duracion">
        <br><br>
        <button type="submit">Enviar</button>
        <br><br>
        <?php
            /*
                Dada una duracion en minutos de una llamada telefonica, calcular su costo de la siguiente manera:
                    a) Hasta 3 minutos = $ 9,50 por minuto
                    b) Mas de 3 minutos = sumarle $ 1,10 por minuto
            */

            if($_POST)
            {
                $coste_minuto_extra = 1.10;
                $tarifa_estandar = 9.50;
                $numA = $_POST["numeroA"];
                if ($numA > 3)
                {
                    $resta = $numA - 3;
                    $resultado = $resta * $coste_minuto_extra;
                    $costo_total = $resultado + ($tarifa_estandar * 3);
                    echo "El costo de la llamada con duración de " .$numA. " minutos es: $".$costo_total;
                }
                else
                {
                    $costo_total = $tarifa_estandar*$numA;
                    echo "El costo de la llamada con duración de " .$numA. " minutos es: $".$costo_total;
                }

            }
            include('../footer.html');
        ?>
    </form>
</body>
</html>