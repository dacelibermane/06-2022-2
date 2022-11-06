<?php

$baseNum = (int)readline("Enter the number to multiply: \n");
$power = (int)readline("Enter the power: \n");
$result = 1;

for ($i = 0; $i < $power; $i++) {
    $result *= $baseNum;
}

echo $result . "\n";