<?php
    /*Una maestra ingresa 3 notas por alumno obtener:
        el promedio de las notas, solamente los números positivos menores a 10, sino mostrar un mensaje “una de las notas no corresponde”
        b) mostrar la nota Mayor
        c) mostrar la nota Menor*/

    if($_POST)
    {
        $numA = $_POST["notaA"];
        $numB = $_POST["notaB"];
        $numC = $_POST["notaC"];

        if($numA && $numB && $numC <= 10)
        {
            $promedio = ($numA+$numB+$numC) / 3;
            echo "a) El promedio de las notas es: " .$promedio ."<br/>" ."<br/>";
            if ($numA > $numB)
            {
                if ($numA > $numC)
                {
                    $notaMayor = $numA;
                }
            }
            else
            {
                if ($numB > $numC)
                {
                    $notaMayor = $numB;
                }
                else
                {
                    $notaMayor = $numC;
                }
            }
            echo "b) La nota mayor es: " .$notaMayor;
        }
        else
        {
            echo "a) Error, una de las notas no corresponde" ."<br/>" ."<br/>";
        }
    }
?>