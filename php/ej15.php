<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 15</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej15.php" method="post">
        <h2>Generar los números del 1 al 100 y mostrar sus opuestos</h2>
        <br>
       <?php 
            for ($i = 1; $i <= 100; $i++) 
            {
                echo -$i .", ";
            }
            include('../footer.html');
       ?> 
    </form>
</body>
</html>