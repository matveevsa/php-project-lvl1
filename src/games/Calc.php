<?php

namespace BrainGames\BrainCalc;

function brainCalc($minNumber = 0, $maxNumber = 20)
{
    $operators = ['+', '-', '*'];
    $countOperators = count($operators) - 1;
    $randomIndex = rand(0, $countOperators);
    $operator = $operators[$randomIndex];

    $num1 = rand($minNumber, $maxNumber);
    $num2 = rand($minNumber, $maxNumber);

    $question = null;
    $correctAnswer = null;

    switch ($operator) {
        case '+':
            $question = "{$num1} + {$num2}";
            $correctAnswer = $num1 + $num2;
            break;
        case '-':
            $question = "{$num1} - {$num2}";
            $correctAnswer = $num1 - $num2;
            break;
        case '*':
            $question = "{$num1} * {$num2}";
            $correctAnswer = $num1 * $num2;
            break;
        default:
            print_r('Error! Unknown operator!');
    }

    return [$question, (string) $correctAnswer];
}
