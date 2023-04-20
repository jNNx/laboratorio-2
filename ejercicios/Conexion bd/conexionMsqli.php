<?php

$serverName = "localhost";
$dataBase = "databasename";
$userName = "username";
$password = "password";

$con = mysqli_connect($serverName, $userName, $password, $dataBase);

if(!con)
{
    die("La conexion ha fallado: ". mysqli_connect_error());
}
echo "Conexion exitosa.";
//mysqli_close($con);
?>