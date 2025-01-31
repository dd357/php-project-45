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

function brainGame($question, $correctAnswer, $name): bool
{
    echo "Question: {$question}\n";

    echo "Your answer: ";
    $userAnswer = trim(fgets(STDIN));

    if ($correctAnswer !== $userAnswer) {
        echo "'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\n";
        echo "Let's try again, {$name}!\n";
        return false;
    }

    echo "Correct!\n";
    return true;
}