<?php

namespace BrainGames\BrainProgression;

use function BrainGames\Engine\startGame;

function getQuestionAndAnswer()
{
    $step = rand(1, 10);
    $lengthProgression = 10;
    $firstElement = rand(0, 100);
    $secretElement = rand(0, $lengthProgression - 1);
    $progression = [];

    for ($i = 0; $i < $lengthProgression; $i += 1) {
        $progression[] = $i === $secretElement ? '**' : $firstElement + $step * $i;
    }

    $correctAnswer = $firstElement + $step * $secretElement;
    $question = implode(' ', $progression);

    return [$question, (string) $correctAnswer];
}

function startBrainProgression()
{
    $message = 'What number is missing in the progression?';
    $getQuestionAndAnswer = function () {
        return getQuestionAndAnswer();
    };

    return startGame($getQuestionAndAnswer, $message);
}
