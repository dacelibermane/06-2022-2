<?php
$firstWord= readline("Enter first word: \n");
$secondWord = readline("Enter second word: \n");

$countLetters1 = strlen($firstWord);
$countLetters2 = strlen($secondWord);

$loopCount = 30 - $countLetters1 - $countLetters2;

$dots = '.';
$finalDots = '';
for ($i = 0; $i < $loopCount; $i++){
    $finalDots .=$dots ;
}

echo "$firstWord$finalDots$secondWord";