<?php
//Obtener (a - b) * (a + b)
    if($_POST)
    {
        $numA = $_POST["numeroA"];
        $numB = $_POST["numeroB"];
        $operacion = ($numA - $numB) * ($numA + $numB);
        echo "Siendo A = " .$numA. ", y B = " .$numB. "<br>";
        echo "El resultado de la operacion (a - b) * (a + b) es: " .$operacion;
    }
?>