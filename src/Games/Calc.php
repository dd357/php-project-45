<?php

namespace BrainGames\Games\Calc;

function brainCalc()
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name?\n";

    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";

    echo "What is the result of the expression?\n";

    for ($i = 0; $i < 3; $i++) {
        $op1 = rand(0, 5);
        $op2 = rand(0, 5);

        $sign = ['+', '-', '*'];

        $op = $sign[rand(0, 2)];

        echo "Question: {$op1} {$op} {$op2}\n";
        echo "Your answer: ";
        $answer = (int) trim(fgets(STDIN));

        $res = 0;

        switch ($op) {
            case '+':
                $res = $op1 + $op2;
                break;

            case '-':
                $res = $op1 - $op2;
                break;

            case '*':
                $res = $op1 * $op2;
                break;
        }

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
