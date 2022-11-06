<?php

$dicePointCount = 0;

echo "Welcome to Piglet!\n";

while (true) {

    $diceRoll = rand(1, 6);
    $dicePointCount += $diceRoll;

    echo "You rolled a $diceRoll!\n";
    if ($diceRoll == 1) {
        echo "You got 0 points!";
        exit;
    }
    $userInput = readline("Roll again? y|n  ");

    if ($userInput != "y") {
        echo "You got $dicePointCount points.";
        exit;
    }

}


