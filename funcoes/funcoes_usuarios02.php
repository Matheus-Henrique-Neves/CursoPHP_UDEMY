<?php

function recalculo($salario_recalculo,$salario){
if($salario_recalculo>3&&$salario_recalculo<=5){
return $salario*1.250*$salario_recalculo;
}elseif($salario_recalculo>5&&$salario_recalculo<=8){
    return $salario*1.125*$salario_recalculo;
}elseif($salario_recalculo>8&&$salario_recalculo<=10){
    return $salario*1.025*$salario_recalculo;
}else{
    return $salario*$salario_recalculo;
}
}
echo recalculo(1001.99,5);
