<?php
/* Hallar A+B-C+100 */
    if($_POST)
    {
        $numA = $_POST["numeroA"];
        $numB = $_POST["numeroB"];
        $numC = $_POST["numeroC"];
        $suma = $numA+$numB-$numC+100;
        echo "Con los valores A = " .$numA .", B = " .$numB. ", y C = " .$numC . "<br/>" ."<br/>";
        echo "El resultado de la operacion A+B-C+100 = " . $suma;
    }

?>