<?php

namespace BrainGames\Games\Progression;

function brainProgression()
{
    $start = 5;
    $step = 2;
    $pos = 6;

    $str = "{$start}"; // 5 7 9 11 13 .. 17 19 21 23
    
    for($i = 1; $i < 10; $i++ ) {
        
        $start += $step;
        $str = "{$str} {$start}";
    }

    echo $str;

    // echo "Welcome to the Brain Games!\n";
    // echo "May I have your name?\n";

    // $name = trim(fgets(STDIN));
    // echo "Hello, {$name}!\n";

    // echo "What number is missing in the progression?\n";

    // for ($i = 0; $i < 3; $i++) {
    //    $a = rand(0, 100);
    //    $b = rand(0, 100);

    //     echo "Question: {$a} {$b}\n";
    //     echo "Your answer: ";
    //     $answer = (int) trim(fgets(STDIN));

    //     while ($b != 0) {
    //         $t = $b;
    //         $b = $a % $b;
    //         $a = $t;
    //     }
       
    //     $res =  $a;

    //     if ($res !== $answer) {
    //         echo "'{$answer}' is wrong answer ;(. Correct answer was '{$res}'.\n";
    //         echo "Let's try again, {$name}!\n";
    //         return;
    //     }

    //     echo "Correct!\n";
    // }

    // echo "Congratulations, {$name}!\n";
    // return;
}