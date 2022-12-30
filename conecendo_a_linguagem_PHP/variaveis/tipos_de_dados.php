<?php
$anoNacimento=1997;//int 
$nome="matheus";//string
$verdadeiro= true;//boolean
unset ($nome);
//echo $nome." ".$anoNacimento." ".$verdadeiro;
if(isset($nome))
{
    echo $nome." ".$anoNacimento." ".$verdadeiro;
}else
{
    echo $anoNacimento." ".$verdadeiro;
}



?>