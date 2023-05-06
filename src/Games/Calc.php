<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\calculate;
use function BrainGames\Engine\gameEngine;
use function BrainGames\Engine\generatingSign;
use function BrainGames\Engine\greeting;

function playCalc()
{
    $name = greeting();
    echo "What is the result of the expression?\n";

    for ($i = 0; $i < 3; $i++) {
        $sign = generatingSign();
        $a = rand(1, 100);
        $b = rand(1, 100);
        $question = "{$a} {$sign} {$b}";
        $calc = calculate($sign, $a, $b);

        if (!gameEngine($name, $question, $calc)) {
            return;
        }
    }
    echo "Congratulations, {$name}!\n";
}



/* function playCalc()
{
    $name = greeting();
    echo "What is the result of the expression?\n";

    for ($i = 0; $i < 3; $i++) {
        $sign = generatingSign();
        $a = rand() & 10;
        $b = rand() & 10;
        $res = 0;

        echo "Question: {$a} {$sign} {$b}\n";

        echo "Your answer: ";
        $answer = (int) trim(fgets(STDIN));

        if ($sign === "+") {
            $res = $a + $b;
        } elseif ($sign === "-") {
            $res = $a - $b;
        } elseif ($sign === "*") {
            $res = $a * $b;
        }

        if ($res === $answer) {
            echo "Correct!\n";
        } else {
            echo "'{$answer}' is wrong answer ;(. Correct answer was '{$res}'.\n";
            echo "Let's try again, {$name}!\n";
            return;
        }
    }
    echo "Congratulations, {$name}!\n";
} */
