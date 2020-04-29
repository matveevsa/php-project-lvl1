<?php

namespace BrainGames\BrainCalc;

use function BrainGames\Engine\startGame;

function getQuestionAndAnswer($minNumber = 0, $maxNumber = 20)
{
    $operators = ['+', '-', '*'];
    $randomIndex = array_rand($operators);
    $operator = $operators[$randomIndex];

    $num1 = rand($minNumber, $maxNumber);
    $num2 = rand($minNumber, $maxNumber);

    $question = null;
    $correctAnswer = null;

    switch ($operator) {
        case '+':
            $correctAnswer = $num1 + $num2;
            break;
        case '-':
            $correctAnswer = $num1 - $num2;
            break;
        case '*':
            $correctAnswer = $num1 * $num2;
            break;
        default:
            return null;
    }
    $question = "{$num1} {$operator} {$num2}";

    return [$question, (string) $correctAnswer];
}

function startBrainCalc()
{
    $message = 'What is the result of the expression?';
    $getQuestionAndAnswer = function () {
        return getQuestionAndAnswer();
    };

    return startGame($getQuestionAndAnswer, $message);
}
