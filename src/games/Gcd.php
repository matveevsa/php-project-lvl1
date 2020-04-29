<?php

namespace BrainGames\BrainGcd;

use function BrainGames\Engine\startGame;

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

function getQuestionAndAnswer($minNumber = 0, $maxNumber = 30)
{
    $num1 = rand($minNumber, $maxNumber);
    $num2 = rand($minNumber, $maxNumber);

    $question = "{$num1} {$num2}";
    $correctAnswer = gcd($num1, $num2);

    return [$question, (string) $correctAnswer];
}

function startBrainGcd()
{
    $message = 'Find the greatest common divisor of given numbers.';
    $getQuestionAndAnswer = function () {
        return getQuestionAndAnswer();
    };

    return startGame($getQuestionAndAnswer, $message);
}
