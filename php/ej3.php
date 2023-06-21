<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/ejercicios.css">
    <title>Ejercicio - 3</title>
</head>
<body>
    <?php include('../navbar-2.html'); ?>
    <form action="../php/ej3.php" method="post">
        <h2>Dado un numero positivo, mostrar su opuesto</h2>
        <br>
        <h3>Ingrese un número</h3>
        <input type="number" name="numero" placeholder="Numero">
        <br><br>
        <button type="submit">Enviar</button>
        <br>
        <br>
    <?php
    //Dado un numero positivo, mostrar su opuesto
    if($_POST)
    {
        $num = $_POST["numero"];
        echo "El opuesto del número dado es: -".$num;
    }
    include('../footer.html'); ?>
    <script type="text/javascript">
        document.oncontextmenu = new Function("return false");
    </script>
    </form>
</body>
</html>