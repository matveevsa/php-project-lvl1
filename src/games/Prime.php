<?php

namespace BrainGames\BrainPrime;

use function BrainGames\Engine\startGame;

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

function getQuestionAndAnswer($minNumber = 0, $maxNumber = 100)
{
    $question = rand($minNumber, $maxNumber);
    $isPrime = isPrime($question);
    $correctAnswer = $isPrime ? 'yes' : 'no';

    return [$question, $correctAnswer];
}

function startBrainPrime()
{
    $message = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $getQuestionAndAnswer = function () {
        return getQuestionAndAnswer();
    };

    return startGame($getQuestionAndAnswer, $message);
}
