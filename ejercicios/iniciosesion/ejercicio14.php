<?php

session_start();

$_SESSION["usuario"]= "Juan";
$_SESSION["status"]= "Logeado";

echo "sesion iniciada <br/>";
echo "Usuario: " .$_SESSION["usuario"]." status: " .$_SESSION["status"];

if(isset ($_SESSION["usuario"]))
{
    echo "Usuario: " .$_SESSION["usuario"]." status: " .$_SESSION["status"];
}
else
{
    echo "No hay datos de sesion";
}
?>