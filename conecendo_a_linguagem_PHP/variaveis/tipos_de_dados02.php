<?php
$nome="matheus";
$site='www.matheus.com.br';
$ano=2001;
$salario=5500.99;
$bloqueado=false;
////////////////////////////////////////////////////////////
$frutas = array("maça","banana","abacaxi");
$nacimento = new Datetime();
//////////////////////////////////////////////////
$arquivo = fopen("tipos_de_dados.php","r");
$nulo=null;
///////////////////////////////////////////////
var_dump($nome);
var_dump($site);
var_dump($ano);
var_dump($salario);
var_dump($bloqueado);
var_dump($frutas);
var_dump($nacimento);
var_dump($arquivo);
var_dump($nulo);

?>