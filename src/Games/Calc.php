<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\generatingSign;
use function BrainGames\Engine\greeting;

function playCalc()
{
    $name = greeting();
    echo "What is the result of the expression?\n";

    $sign = generatingSign();

    if ($sign === "+") {
        echo "add\n";
    } elseif ($sign === "-") {
        echo "sub\n";
    } elseif ($sign === "*") {
        echo "mult\n";
    }

  
}

/*
./bin/brain-calc

Welcome to the Brain Games!
May I have your name? Sam
Hello, Sam!
What is the result of the expression?
Question: 4 + 10
Your answer: 14
Correct!
Question: 25 - 11
Your answer: 14
Correct!
Question: 25 * 7
Your answer: 175
Correct!
Congratulations, Sam!

Достаточно реализовать следующие операции: +, - и *.
Операции, как и числа, выбираются случайным образом.
В случае, если пользователь даст неверный ответ, необходимо вывести:

Question: 25 * 7
Your answer: 145
'145' is wrong answer ;(. Correct answer was '175'.
Let's try again, Sam!
и завершить игру.
*/