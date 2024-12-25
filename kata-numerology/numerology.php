<?php
$n = readline("Introduce un numero: ");

while ($n > 9) {
    $array = str_split($n);
    $n = array_sum($array);
}

echo $n . " ";

$result = match ($n) {
    0 => "el tot.",
    1 => "individualitat.",
    2 => "dualitat.",
    3 => "raó.",
    4 => "estabilitat.",
    5 => "amor.",
    6 => "destrucció.",
    7 => "saviessa.",
    8 => "poder.",
    9 => "generositat.",
};

echo $result;
