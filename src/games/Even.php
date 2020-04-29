<?php

namespace BrainGames\BrainEven;

use function BrainGames\Engine\startGame;

function isEven($num)
{
    return $num % 2 === 0;
}

function getQuestionAndAnswer($minNumber = 0, $maxNumber = 200)
{
    $question = rand($minNumber, $maxNumber);
    $correctAnswer = isEven($question) ? 'yes' : 'no';
    return [$question, $correctAnswer];
}

function startBrainEven()
{
    $message = 'Answer "yes" if the number is even, otherwise answer "no".';
    $getQuestionAndAnswer = function () {
        return getQuestionAndAnswer();
    };

    return startGame($getQuestionAndAnswer, $message);
}
