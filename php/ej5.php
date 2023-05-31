<?php

//Dado número, verificar si es mayor a 100
    if($_POST)
    {
        $num = $_POST["numero"];
        $resultado = $num > 100 ? 'Es mayor a 100' : 'Es menor a 100';
        echo $resultado;
    }
?>