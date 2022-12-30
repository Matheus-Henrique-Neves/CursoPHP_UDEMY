<?php
$carros[0][0]="GM";
$carros[0][1]="Cobalt";
$carros[0][2]="Onix";
$carros[0][3]="Camaro";

$carros[1][0]="Ford";
$carros[1][1]="fiesta";
$carros[1][2]="fusion";
$carros[1][3]="Eco Sport";
 

echo $carros[0][3]."<br>";
echo end($carros[1]);


$pessoas = array();
array_push($pessoas , array(
"nome"=>"matheus",
"peso"=>200


));
array_push($pessoas , array(
    "nome"=>"natan",
    "peso"=>80
    
    
    ));
    print_r($pessoas);