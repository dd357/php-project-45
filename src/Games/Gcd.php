<?php

namespace BrainGames\Games\Gcd;

function brainGcd()
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name?\n";

    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";

    echo "Find the greatest common divisor of given numbers.\n";

    for ($i = 0; $i < 3; $i++) {
       $a = rand(1, 100);
       $b = rand(1, 100);

        echo "Question: {$a} {$b}\n";
        echo "Your answer: ";
        $answer = (int) trim(fgets(STDIN));

        while ($b != 0) {
            $t = $b;
            $b = $a % $b;
            $a = $t;
        }
       
        $res =  $a;

        if ($res !== $answer) {
            echo "'{$answer}' is wrong answer ;(. Correct answer was '{$res}'.\n";
            echo "Let's try again, {$name}!\n";
            return;
        }

        echo "Correct!\n";
    }

    echo "Congratulations, {$name}!\n";
    return;
}
