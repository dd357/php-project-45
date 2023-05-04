<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\greeting;

function playProgression()
{
    //greeting();

    $step = rand(1, 10);
    $pos = rand(1, 10);
    $first = rand(1, 50);
    $res = "";


    for ($i = 0; $i < 10; $i++) {
        $res = "{$res}";
    }


}

/*
Показываем игроку ряд чисел, образующий арифметическую прогрессию, заменив любое из чисел двумя точками. Игрок должен определить это число.

Рекомендуемая длина прогрессии – 10 чисел. Длина может генерироваться случайным образом, но должна содержать не менее 5-ти чисел!
Позиция спрятанного элемента каждый раз изменяется (выбирается случайным образом).
Пример:

./bin/brain-progression

Welcome to the Brain Games!
May I have your name? Sam
Hello, Sam!
What number is missing in the progression?
Question: 5 7 9 11 13 .. 17 19 21 23
Your answer: 15
Correct!
Question: 2 5 8 .. 14 17 20 23 26 29
Your answer: 11
Correct!
Question: 14 19 24 29 34 39 44 49 54 ..
Your answer: 59
Correct!
Congratulations, Sam!
В случае, если пользователь даст неверный ответ, необходимо вывести:

Question: 5 7 9 11 13 .. 17 19 21 23
Your answer: 1
'1' is wrong answer ;(. Correct answer was '15'.
Let's try again, Sam!

*/
