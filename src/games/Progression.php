<?php

namespace BrainGames\BrainProgression;

function brainProgression()
{
    $step = rand(1, 10);
    $lengthProgression = 10;
    $firstElement = rand(0, 100);
    $secretElement = rand(0, 9);
    $progression = [];

    for ($i = 0; $i < $lengthProgression; $i += 1) {
        $progression[] = $i === $secretElement ? '**' : $firstElement + $step * $i;
    }

    $correctAnswer = $firstElement + $step * $secretElement;
    $question = implode(' ', $progression);

    return [$question, $correctAnswer];
}
