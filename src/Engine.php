<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function startGame($question, $correctAnswer, $message, $attempts = 3)
{
    line('Welcome to the Brain Games!');
    line($message);
    $name = prompt('May I have your name?');
    line("Hello, %s!\n", $name);

    for ($i = 0; $i < $attempts; $i += 1) {
        line('Question: %d', $question);
        $answer = prompt("Your answer");
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            return line("Let's try again,%s!", $name);
        }
    }

    return line('Congratulations, %s!', $name);
}
