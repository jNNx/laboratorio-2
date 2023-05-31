<?php
    //Crear un algoritmo que lea dos números y muestre el mayor de los dos
    if($_POST)
    {
        $numA = $_POST["numeroA"];
        $numB = $_POST["numeroB"];
        $resultado = $numA > $numB ? $numA : $numB;
        echo "El mayor de los números ingresados es: ".$resultado;
    }
?>