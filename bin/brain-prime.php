#!/usr/bin/env php
<?php
$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function BrainGames\Engine\startGame;
use function BrainGames\BrainPrime\brainPrime;

$message = 'Answer "yes" if given number is prime. Otherwise answer "no".';

$brainPrime = function () {
    return brainPrime();
};

startGame($brainPrime, $message);
