<?php
$maxNum = (int)readline("Max? ");
$minNum = (int)readline("Min? ");

for ($i = $minNum; $i <= $maxNum; $i++) {
    for ($j = $i; $j <= $maxNum; $j++) {//12345 2345 345 45 5
        echo $j;
    }
    for ($k = 0; $k < $i - $minNum; $k++) {
        echo $minNum + $k;
    }
    echo PHP_EOL;
}