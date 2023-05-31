<?php 
/*  Triángulo equilátero. Tres lados iguales
    Triángulo isósceles. Dos lados iguales.
    Triángulo escaleno. Tres lados desiguales. 
*/
    if($_POST)
    {
        $numA = $_POST["numeroA"];
        $numB = $_POST["numeroB"];
        $numC = $_POST["numeroC"];
        if ($numA == $numB)
        {
            if ($numB == $numC)
            {
                echo "Es un triángulo equilátero.";
            }
            else
            {
                echo "Es un triángulo isósceles.";
            }
        }
        else
        {
            if ($numA != $numC)
            {
                echo "Es un triángulo escaleno.";
            }
        }
    }
?>