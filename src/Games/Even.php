<?php

namespace BrainGames\Games\Even;
namespace BrainGames\Engine;
use function BrainGames\Engine\greeting1;

function playEven()
{
    /*echo "Welcome to the Brain Games!\n";
    echo "May I have your name? ";
    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";*/
    
    greeting1();

    echo "Answer \"yes\" if the number is even, otherwise answer \"no\".\n";
    
    for ($i = 0; $i < 3; $i++) {
        $num = rand();
        echo "Question: {$num}\n";
        
        echo "Your answer: ";
        $answer = trim(fgets(STDIN));
        $isEven = ($num % 2 === 0) ? 'yes' : 'no';
    
        if ($answer !== 'yes' && $answer !== 'no') {        
            echo "'{$answer}' is wrong answer ;(. Correct answer was '{$isEven}'.\n";
            echo "Let's try again, Bill!\n";
            return;
        }
    
        if ($answer === $isEven)
        {
            echo "Correct!\n";
        } else {
            echo "'{$answer}' is wrong answer ;(. Correct answer was '{$isEven}'.\n";
            echo "Let's try again, Bill!\n";
            return;
        }    
    }
    
    echo "Congratulations, {$name}!\n";
}