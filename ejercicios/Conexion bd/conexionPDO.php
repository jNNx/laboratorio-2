<?php

require_once 'pdoconfig.php';
try{
    $con = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    echo "Conexion a $bdname en $host fue exitosa.";
} catch (exception $e)
{
    die ("No se puede conectar a la base de datos $dbname: " .$getMessage());
}
?>