<?php
$n = readline("Introduce un numero: ");
$sum = 0;
$temp = $n;

while($n > 0){
    $r = $n % 10;
    var_dump($r);
    $sum = $sum + ($r * $r * $r);
    $n = intval($n / 10);
}

if($sum == $temp){
    echo $temp . " es un numero Armstrong";
}else{
    echo $temp . " no es un numero Armstrong";
}