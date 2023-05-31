<?php
    /*
        Dada una duracion en minutos de una llamada telefonica, calcular su costo de la siguiente manera:
            a) Hasta 3 minutos = $ 9,50 por minuto
            b) Mas de 3 minutos = sumarle $ 1,10 por minuto
    */

    if($_POST)
    {
        $coste_minuto_extra = 1.10;
        $tarifa_estandar = 9.50;
        $numA = $_POST["numeroA"];
        if ($numA > 3)
        {
            $resta = $numA - 3;
            $resultado = $resta * $coste_minuto_extra;
            $costo_total = $resultado + ($tarifa_estandar * 3);
            echo "El costo de la llamada con duración de " .$numA. " minutos es: $".$costo_total;
        }
        else
        {
            $costo_total = $tarifa_estandar*$numA;
            echo "El costo de la llamada con duración de " .$numA. " minutos es: $".$costo_total;
        }

    }
?>