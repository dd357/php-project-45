<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\gameEngine;
use function BrainGames\Engine\getProgression;
use function BrainGames\Engine\greeting;

function playProgression()
{
    $name = greeting();
    echo "What number is missing in the progression?\n";

    for ($i = 0; $i < 3; $i++) {
        $first = rand(1, 50);
        $step = rand(1, 10);
        $pos = rand(0, 9);

        $progression = getProgression($first, $step, $pos);

        if (!gameEngine($name, $progression[0], $progression[1])) {
            return;
        }
    }
    echo "Congratulations, {$name}!\n";
}

/* function playProgression()
{
    $name = greeting();

    echo "What number is missing in the progression?\n";

    for ($i = 0; $i < 3; $i++) {
        $step = rand(1, 10);
        $pos = rand(0, 9);
        $first = rand(1, 50);
        $hid = 0;

        echo "Question: ";

        for ($j = 0; $j < 10; $j++) {
            $num = $first + $step * $j;

            if ($j === $pos) {
                echo ".. ";
                $hid = $num;
            } else {
                echo "{$num} ";
            }
        }

        echo "\n";

        echo "Your answer: ";
        $answer = (int) trim(fgets(STDIN));

        if ($hid === $answer) {
            echo "Correct!\n";
        } else {
            echo "'{$answer}' is wrong answer ;(. Correct answer was '{$hid}'.\n";
            echo "Let's try again, {$name}!\n";
            return;
        }
    }

    echo "Congratulations, {$name}!\n";
} */
