<?php

namespace BrainGames\Engine;

function greeting()
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name? ";
    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";
    return $name;
}

function generatingSign()
{
    $sign = ['+', '-', '*'];
    return $sign[rand(0, 2)];
}

function getGcd($a, $b)
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

    return $a ?: $b;
}

function alert()
{
    if ($gcd === $answer) {
        echo "Correct!\n";
    } else {
        echo "'{$answer}' is wrong answer ;(. Correct answer was '{$gcd}'.\n";
        echo "Let's try again, {$name}!\n";
        return;
    }
}