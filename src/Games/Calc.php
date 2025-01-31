<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\brainGame;
use function BrainGames\Engine\getUsername;

function brainCalc()
{
    $name = getUsername();

    echo "What is the result of the expression?\n";

    for ($i = 0; $i < 3; $i++) {
        $op1 = rand(0, 5);
        $op2 = rand(0, 5);

        $sign = ['+', '-', '*'];

        $op = $sign[rand(0, 2)];

        $question = "{$op1} {$op} {$op2}";

        $res = "";

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

        if (!brainGame($question, (string)$res, $name)) {
            return;
        }
    }

    echo "Congratulations, {$name}!\n";
    return;
}
