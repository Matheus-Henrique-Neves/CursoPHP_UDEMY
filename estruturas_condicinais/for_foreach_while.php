<?php

for($i=0;$i<=100;$i++){
    $a=rand();
    echo $a."<br>";
}
echo "<br><br><br><br><br><br><br><br><br><br>";

$meses=array(
"jan","fev","mar","abr","mai","jun","jul","ago","set","out","nov","dez"

);
foreach($meses as $index =>$mes){
    echo "o numero do indice é $index ";
    echo"e o mes referente é o $mes <br>";
}
echo "<br><br><br><br><br><br><br><br><br><br>";
$b=20;
while($b>-22){
    $b--;
    echo $b."<br>";
}