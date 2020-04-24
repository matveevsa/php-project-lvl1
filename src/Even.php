<?php

namespace BrainGames\BrainEven;

function brainEven($minNumber = 0, $maxNumber = 200)
{
    $question = rand($minNumber, $maxNumber);
    $isEven = $question % 2 === 0;
    $correctAnswer = $isEven ? 'yes' : 'no';
    $evenResult = [$question, $correctAnswer];
    return $evenResult;
}
