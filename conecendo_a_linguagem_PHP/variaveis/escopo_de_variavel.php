<?php
$nome ="mathues";
function teste(){
    global $nome;
    echo $nome;
}
function teste2(){
    $nome="natan";
    echo $nome;
}
teste();
teste2();