<?php
//Ciclo FOR

for($numeroinicial=0; $numeroinicial<10; $numeroinicial++){
    echo "Numero ".$numeroinicial."<br/>";
}

//Ciclo DO...While

$numeroInicial=0;

do{
    echo "Numero ".$numeroInicial."<br/>";
    $numeroInicial++;

}while($numeroInicial<10);

//Ciclo While
$numeroinicial=0;
while($numeroinicial<20){
    echo "Numero ".$numeroinicial."<br/>";
    $numeroinicial++;
}

$numeroAleatorio = rand(1, 100);

echo $numeroAleatorio."<br/>";
