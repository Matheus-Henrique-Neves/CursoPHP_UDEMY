<?php


$pessoas = array();
array_push($pessoas , array(
"nome"=>"matheus",
"peso"=>200


));
array_push($pessoas , array(
    "nome"=>"natan",
    "peso"=>80
    
    
    ));
echo json_encode($pessoas);