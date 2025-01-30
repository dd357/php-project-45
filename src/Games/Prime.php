<?php

namespace BrainGames\Games\Prime;

function isPrime($num)
{
    if($num < 2) {
        return false;
    }
    
    for($i = 2; $i <= (int)($num / 2); $i++) {
        if($num % $i === 0) {
            return false;
        }
    }
    return true;
}

function brainPrime()
{
    $num = 9;

    echo (int)(5 / 2);

    //print_r(isPrime(4) ? "true\n" : "false\n");




        




   // echo "Welcome to the Brain Games!\n";
    // echo "May I have your name?\n";

    // $name = trim(fgets(STDIN));
    // echo "Hello, {$name}!\n";

    // echo "Answer "yes" if given number is prime. Otherwise answer "no".\n";

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