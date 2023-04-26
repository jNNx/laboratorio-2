<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio6.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
<?php

if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    //Suma de A y B
    $suma=$valorA+$valorB;
    //Resta de A y B
    $resta=$valorA-$valorB;
    //Division entre A y B
    if($valorB<>0){
        $dividir=$valorA/$valorB;
        echo "<br/>"."El Cociente es ".$dividir;
    }else{
        $dividir="cero";
        echo "No es posible la division por ".$dividir;

    };
    //Multiplicacion entre A y B
    $multiplicar=$valorA*$valorB;
    
    echo "<br/>"."La Suma es ".$suma;
    echo "<br/>"."La Resta es ".$resta;
    //echo "<br/>"."El Cociente es ".$dividir;
    echo "<br/>"."La Multiplicacion es ".$multiplicar;

}
?>
</html>
