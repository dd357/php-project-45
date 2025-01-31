<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\brainGame;
use function BrainGames\Engine\getUsername;

function brainProgression()
{
    $name = getUsername();

    echo "What number is missing in the progression?\n";

    for ($i = 0; $i < 3; $i++) {
        $start = rand(1, 10);
        $step = rand(2, 5);
        $pos = rand(0, 9);

        $curr = $start;
        $str = "";
        $correctAnswer = "";

        for ($j = 0; $j < 10; $j++) {
            if ($j === $pos) {
                $str = "{$str} ..";
                $correctAnswer = $curr;
            } else {
                $str = "{$str} {$curr}";
            }
            $curr += $step;
        }

        $str = trim($str);
        $question = "{$str}";

        if (!brainGame($question, (string)$correctAnswer, $name)) {
            return;
        }
    }

    echo "Congratulations, {$name}!\n";
    return;
}
