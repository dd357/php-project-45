<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\greeting;

function playPrime() // 2, 3, 5, 7, 11, 13, 17, 19 ... 73, 79, 83, 89, 97
{
    $name = greeting();

    echo "Answer \"yes\" if given number is prime. Otherwise answer \"no\".\n";

    for ($i = 0; $i < 3; $i++) {
        $num = rand(2, 100);

        echo "Question: {$num}\n";

        $count = 0;

        for ($j = 2; $j <= $num; $j++) {
            if ($num % $j === 0) {
                $count++;
            }
        }

        //echo "{$num} {$count}\n";

        echo "Your answer: ";
        $answer = trim(fgets(STDIN));

        $res = ($count === 1) ? 'yes' : 'no';

        if ($answer !== 'yes' && $answer !== 'no') {
            echo "'{$answer}' is wrong answer ;(. Correct answer was '{$res}'.\n";
            echo "Let's try again, {$name}!\n";
            return;
        }

        //echo "num_{$num} res_{$res} answer_{$answer}\n";

        if ($answer === $res) {
            echo "Correct!\n";
        } else {
            echo "'{$answer}' is wrong answer ;(. Correct answer was '{$res}'.\n";
            echo "Let's try again, {$name}!\n";
            return;
        }
    }

    echo "Congratulations, {$name}!\n";
}
