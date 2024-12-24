<?php
//
$i = 1;
while($i <= 10) {
    echo $i . ", ";
    $i++;
}
echo PHP_EOL;
//
echo "1, 2, 3, 4, 5, 6, 7, 8, 9, 10";
echo PHP_EOL;
//
function contar($n) {
    if ($n <= 10) {
        echo $n . ", ";
        contar($n + 1);
    }
}
contar(1);
echo PHP_EOL;
//
