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


