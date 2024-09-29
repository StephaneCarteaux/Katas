<?php

$num = 13;
$maxSteps = 1000;

try {
    juegoNumerosVivos($num, $maxSteps);
} catch (Exception $e) {
    echo $e->getMessage();
}

function numContainsFive($num): bool
{
    return str_contains(strval($num), '5');
}

function replaceFiveByZero($num): int
{
    return intval(str_replace('5', '0', strval($num)));
}

/**
 * @throws Exception
 */
function juegoNumerosVivos(int $num, int $maxSteps): int
{
    $steps = 0;

    while ($num != 1) {

        if ($steps >= $maxSteps) {
            throw new Exception("Step limit has been reached, infinite loop possible.");
        }

        $num = match (true) {
            numContainsFive($num) => replaceFiveByZero($num),
            $num % 2 == 0 => $num / 2,
            default => $num + 3,
        };

        $steps++;
    }

    echo "Steps: " . $steps . "\n";
    return $steps;
}
