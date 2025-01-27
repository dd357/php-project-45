<?php

namespace BrainGames\Games\Even;

function brainEven()
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name?\n";

    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";
    
    echo "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";

    for ($i = 0; $i < 3; $i++) {
        $rnd = rand(0, 20);
        $even = ($rnd % 2 === 0) ? "yes" : "no";

        echo "Question: {$rnd}\n";
        echo "Your answer: ";
        $answer = trim(fgets(STDIN));

        if ($even !== $answer) {
            echo "'{$answer}' is wrong answer ;(. Correct answer was '{$even}'.\n";
            echo "Let's try again, {$name}!\n";
            return;
        }
        echo "Correct!\n";
    }

    echo "Congratulations, {$name}!\n";
    return;
}
