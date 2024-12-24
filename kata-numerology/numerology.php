<?php
$n = readline("Introduce un numero: ");

while ($n > 9) {
    $array = str_split($n);
    var_dump($array);
    $n = array_sum($array);
    var_dump($n);
}

echo $n . " ";

switch ($n) {
    case 0:
        echo "el tot." . PHP_EOL;
        break;
    case 1:
        echo "individualitat." . PHP_EOL;
        break;
    case 2:
        echo "dualitat." . PHP_EOL;
        break;
    case 3:
        echo "raó." . PHP_EOL;
        break;
    case 4:
        echo "estabilitat." . PHP_EOL;
        break;
    case 5:
        echo "amor." . PHP_EOL;
        break;
    case 6:
        echo "destrucció." . PHP_EOL;
        break;
    case 7:
        echo "saviessa." . PHP_EOL;
        break;
    case 8:
        echo "poder." . PHP_EOL;
        break;
    case 9:
        echo "generositat." . PHP_EOL;
        break;
}
