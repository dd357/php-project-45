<?php

namespace BrainGames\Engine;

function greeting(): string
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name? ";
    $name = trim((string) fgets(STDIN));
    echo "Hello, {$name}!\n";
    return $name;
}

function generatingSign(): string
{
    $sign = ['+', '-', '*'];
    return $sign[rand(0, 2)];
}

function calculate(string $sign, int $op1, int $op2): int
{
    $res = 0;

    if ($sign === "+") {
        $res = $op1 + $op2;
    } elseif ($sign === "-") {
        $res = $op1 - $op2;
    } elseif ($sign === "*") {
        $res = $op1 * $op2;
    }

    return $res;
}

function getGcd(int $a, int $b): int
{
    $res = 1;

    while ($res) {
        if ($a > $b) {
            $res = $a % $b;
            $a = $res;
        } else {
            $res = $b % $a;
            $b = $res;
        }
    }

    return ($a !== 0) ? $a : $b;
}

function isEven(int $num): string
{
    return ($num % 2 === 0) ? 'yes' : 'no';
}

function isPrime(int $num): string
{
    if ($num === 0 || $num === 1) {
        return 'no';
    }

    $count = 0;

    for ($j = 2; $j <= $num; $j++) {
        if ($num % $j === 0) {
            $count++;
        }
    }

    return ($count === 1) ? 'yes' : 'no';
}

function getProgression(int $first, int $step, int $pos)
{
    $pr = "";
    $el = "";

    for ($j = 0; $j < 10; $j++) {
        $num = $first + $step * $j;

        if ($j === $pos) {
            $pr = "{$pr}.. ";
            $el = $num;
        } else {
            $pr = "{$pr}{$num} ";
        }
    }
    return [$pr, $el];
}

function gameEngine(string $name, string $question, string $correctAnswer): bool
{
    echo "Question: {$question}\n";

    echo "Your answer: ";
    $userAnswer = trim((string) fgets(STDIN));

    if ($userAnswer === $correctAnswer) {
        echo "Correct!\n";
        return true;
    } else {
        echo "'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}.\n";
        echo "Let's try again, {$name}!\n";
        return false;
    }
}
