<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\gameEngine;
use function BrainGames\Engine\greeting;
use function BrainGames\Engine\isEven;

function playEven()
{
    $name = greeting();
    echo "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";

    for ($i = 0; $i < 3; $i++) {
        $num = rand(1, 100);

        if (!gameEngine($name, (string) $num, isEven($num))) {
            return;
        }
    }
    echo "Congratulations, {$name}!\n";
}

// $correctAnswer = ($num % 2 === 0) ? 'yes' : 'no';

// $name = greeting();
// echo "{$conditions}\n";

// echo "Congratulations, {$name}!\n";

/*function playEven()
{
    $name = greeting();
    echo "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";

    for ($i = 0; $i < 3; $i++) {
        $num = rand();
        echo "Question: {$num}\n";

        echo "Your answer: ";
        $answer = trim(fgets(STDIN));
        $isEven = ($num % 2 === 0) ? 'yes' : 'no';

        if ($answer === $isEven) {
            echo "Correct!\n";
        } else {
            echo "'{$answer}' is wrong answer ;(. Correct answer was '{$isEven}'.\n";
            echo "Let's try again, {$name}!\n";
            return;
        }
    }

    echo "Congratulations, {$name}!\n";
}*/
