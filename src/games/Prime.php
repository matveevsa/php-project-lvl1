<?php

namespace BrainGames\BrainPrime;

function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= round($num / 2); $i += 1) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}

function brainPrime($minNumber = 0, $maxNumber = 100)
{
    $question = rand($minNumber, $maxNumber);
    $isPrime = isPrime($question);
    $correctAnswer = $isPrime ? 'yes' : 'no';

    return [$question, $correctAnswer];
}
