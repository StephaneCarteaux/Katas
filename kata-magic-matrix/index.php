<?php
$matriz = [
    [2, 7, 6],
    [9, 5, 1],
    [4, 3, 8]
];

// for ($i = 0; $i < count($matriz); $i++) {

//     for ($j = 0; $j < count($matriz[$i]); $j++) {
//         echo $matriz[$i][$j] . " ";
//     }
//     echo PHP_EOL;
// }
$sumaFilas = [0, 0, 0];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriz[$i][$j] . " ";
        $sumaFilas[$i] += $matriz[$i][$j];
    }
    echo $sumaFilas[$i] . " ";
    echo PHP_EOL;
}

$sumaColumnas = [0, 0, 0];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matriz[$j][$i] . " ";
        $sumaColumnas[$i] += $matriz[$i][$j];
    }
    echo $sumaColumnas[$i] . " ";
    echo PHP_EOL;
}

$sumaDiagonal_1 = 0;
for ($i = 0; $i < 3; $i++) {
    $sumaDiagonal_1 += $matriz[$i][$i];
    echo $matriz[$i][$i] . " ";
}
echo $sumaDiagonal_1 . " ";
echo PHP_EOL;

$sumaDiagonal_2 = 0;
for ($i = 0; $i < 3; $i++) {
    $sumaDiagonal_2 += $matriz[$i][2 - $i];
    echo $matriz[$i][2- $i] . " ";
}
echo $sumaDiagonal_2 . " ";
echo PHP_EOL;
