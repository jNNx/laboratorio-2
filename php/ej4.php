<?php
    //Dados dos numeros, mostrar su producto
    if($_POST)
    {
        $numA = $_POST["numeroA"];
        $numB = $_POST["numeroB"];
        $producto = $numA * $numB;
        echo "El resultado del producto de los numeros A = " .$numA. " y B = " .$numB. " es: " .$producto;
    }
?>