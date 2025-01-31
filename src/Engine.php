<?php

namespace BrainGames\Engine;

function getUsername(): string
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name?\n";

    $name = trim((string)fgets(STDIN));
    echo "Hello, {$name}!\n";
    return $name;
}

function brainGame(string $question, string $correctAnswer, string $name): bool
{
    echo "Question: {$question}\n";

    echo "Your answer: ";
    $userAnswer = trim((string)fgets(STDIN));

    if ($correctAnswer !== $userAnswer) {
        echo "'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.\n";
        echo "Let's try again, {$name}!\n";
        return false;
    }

    echo "Correct!\n";
    return true;
}
