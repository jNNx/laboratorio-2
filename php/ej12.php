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
?>