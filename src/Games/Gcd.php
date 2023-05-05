<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\getGcd;
use function BrainGames\Engine\greeting;

function playGcd()
{
    $name = greeting();

    echo "Find the greatest common divisor of given numbers.\n";

    for ($i = 0; $i < 3; $i++) {
        $a = rand(1, 30);
        $b = rand(1, 30);

        $gcd = getGcd($a, $b);

        echo "Question: {$a} {$b}\n";

        echo "Your answer: ";
        $answer = (int) trim(fgets(STDIN));

        if ($gcd === $answer) {
            echo "Correct!\n";
        } else {
            echo "'{$answer}' is wrong answer ;(. Correct answer was '{$gcd}'.\n";
            echo "Let's try again, {$name}!\n";
            return;
        }
    }
    echo "Congratulations, {$name}!\n";
}
