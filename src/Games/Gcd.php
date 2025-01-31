<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\brainGame;
use function BrainGames\Engine\getUsername;

function brainGcd()
{
    $name = getUsername();

    echo "Find the greatest common divisor of given numbers.\n";

    for ($i = 0; $i < 3; $i++) {
        $a = rand(0, 100);
        $b = rand(0, 100);

        $question = "{$a} {$b}";

        while ($b != 0) {
            $t = $b;
            $b = $a % $b;
            $a = $t;
        }

        $res = (string)$a;

        if (!brainGame($question, $res, $name)) {
            return;
        }
    }

    echo "Congratulations, {$name}!\n";
    return;
}
