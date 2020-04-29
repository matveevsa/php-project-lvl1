<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function startGame($func, $message, $countAttempts = 3)
{
    line('Welcome to the Brain Games!');
    line($message . "\n");
    $name = prompt("May I have your name?");
    line("Hello, %s!\n", $name);

    for ($i = 0; $i < $countAttempts; $i += 1) {
        [$question, $correctAnswer] = $func();
        line("Question: {$question}");
        $userAnswer = prompt("Your answer");
        if ($userAnswer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again,%s!", $name);
            return;
        }
    }

    line('Congratulations, %s!', $name);
}
