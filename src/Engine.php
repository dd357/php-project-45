<?php

namespace BrainGames\Engine;

function greeting1()
{
    echo "Welcome to the Brain Games!\n";
    echo "May I have your name? ";
    $name = trim(fgets(STDIN));
    echo "Hello, {$name}!\n";
    return $name;
}


