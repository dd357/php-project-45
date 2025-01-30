<?php

namespace BrainGames\Engine;

function getUsername(): string
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name?\n";

    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";
    return $name;
}

function brainGame()
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name?\n";

    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";

    //echo "{$description}\n";

    for ($i = 0; $i < 3; $i++) {
        $question = 1;
        $correctAnswer = 1;

        echo "Question: {$question}\n";
        echo "Your answer: ";
        $answer = trim(fgets(STDIN));

        if ($correctAnswer !== $answer) {
            echo "'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\n";
            echo "Let's try again, {$name}!\n";
            return;
        }
        echo "Correct!\n";
    }

    echo "Congratulations, {$name}!\n";
    return;
}