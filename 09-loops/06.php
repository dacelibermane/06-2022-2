<?php

$size = 5;
$starLength = 8;
$sideLength = 4;

for ($i = 1; $i <= $size; $i++){
    for ($j = 1; $j <= $size * $sideLength - $sideLength * $i; $j++){
        echo "/";
    }
    for ($j = 1; $j <= $starLength * $i - $starLength; $j++){
        echo "*";
    }
    for ($j = 1; $j <= $size * $sideLength - $sideLength * $i; $j++){
        echo "\\";
    }

    echo PHP_EOL;
}