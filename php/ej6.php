<?php 
    //Dado un numero verificar si es positivo, negativo o nulo
    if($_POST)
    {
        $num = $_POST["numero"];
        if ($num != 0) 
        {
            if ($num > 0)
            {
                echo "El número ingresado es positivo";
            }
            else
            {
                echo "El número ingresado es negativo";
            }
        }
        else
        {
            echo "El número ingresado es 0";
        }
    }
?>