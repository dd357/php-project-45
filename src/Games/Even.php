<?php

namespace BrainGames\Games\Even;
use function BrainGames\Engine\brainGame;
use function BrainGames\Engine\getUsername;

function brainEven()
{
    $name = getUsername();

    echo "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";

    for ($i = 0; $i < 3; $i++) {
        $rnd = rand(0, 20);
        $even = ($rnd % 2 === 0) ? "yes" : "no";
        $question = "$rnd";

        if(!brainGame($question, $even, $name)){
            return;    
        }
    }

    echo "Congratulations, {$name}!\n";
    return;
}
