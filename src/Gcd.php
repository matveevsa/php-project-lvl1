<?php

namespace BrainGames\BrainGcd;

function gcd($a, $b)
{
    while ($a !== 0 && $b !== 0) {
        if ($a > $b) {
            $a = $a % $b;
        } else {
            $b = $b % $a;
        }
    }

    return ($a + $b);
}

function brainGcd($minNumber = 0, $maxNumber = 200)
{
    $num1 = rand($minNumber, $maxNumber);
    $num2 = rand($minNumber, $maxNumber);

    $question = "{$num1} {$num2}";
    $correctAnswer = gcd($num1, $num2);

    return [$question, (string) $correctAnswer];
}
