<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 6</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej6.php" method="post">
        <h2>Dado un numero verificar si es positivo, negativo o nulo</h2>
        <br>
        <h3>Ingrese un número</h3>
        <br>
        <input type="number" name="numero" placeholder="Numero">
        <br><br>
        <button type="submit">Enviar</button>
        <br><br>
        <?php 
        //Dado un numero verificar si es positivo, negativo o nulo
            if($_POST)
            {
                $num = $_POST["numero"];
                if ($num != 0) 
                {
                    if ($num > 0)
                    {
                        echo "El número ingresado es positivo";
                    }
                    else
                    {
                        echo "El número ingresado es negativo";
                    }
                }
                else
                {
                    echo "El número ingresado es 0";
                }
            }
            include('../footer.html');
        ?>
    </form>
</body>
</html>