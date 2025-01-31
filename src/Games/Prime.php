<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\brainGame;
use function BrainGames\Engine\getUsername;

function isPrime(int $num): string
{
    if ($num < 2) {
        return "no";
    }

    for ($i = 2; $i <= (int)($num / 2); $i++) {
        if ($num % $i === 0) {
            return "no";
        }
    }
    return "yes";
}

function brainPrime()
{
    $name = getUsername();

    echo "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";

    for ($i = 0; $i < 3; $i++) {
        $num = rand(0, 15);

        $correctAnswer = isPrime($num);

        if (!brainGame((string)$num, $correctAnswer, $name)) {
            return;
        }
    }

    echo "Congratulations, {$name}!\n";
    return;
}
