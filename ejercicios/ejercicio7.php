<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio7.php" method="post">
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

    if($valorA != $valorB){ //> < != == >= <= son operadores relacionales

            echo "<br>El valor de A es diferente al valor de B";
    }else{
        echo "El valor de A es igual al valor de B";
    }
    if(($valorA != $valorB)&&($valorA>$valorB)){ 
        // || operador logico OR - && operador logico AND

        echo "<br>El valor de A es diferente al valor de B y tambien es mayor";
    }
    if($valorA == $valorB){ //> < != == >= <= son operadores relacionales

    echo "<br>El valor de A es igual al valor de B";

    if($valorA==4){
        echo"<br> A es igual a 4";
    }
    if($valorA==5){
        echo"<br> A es igual a 5";
    }
    }
    if(($valorA == $valorB)&&($valorA==4)){
        echo "<br>El valor de A es igual al valor de B y A es igual a 4";

    }
}
?>
</html>
